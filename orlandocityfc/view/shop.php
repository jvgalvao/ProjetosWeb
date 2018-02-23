<?php include_once("header.php");?>

<section ng-controller="destaque-controller">
	<!--Produto Escolhido-->
	<div class="container" id="destaque-produtos-container">

		<div id="destaque-produtos">
			
			<div class="item" ng-repeat="produto in produtos">
				<!--Coluna de imagem-->
				<div class="col-sm-6 col-imagem">
					<a href="produto-{{produto.id_prod}}">
						<!--Aparecer um unico produto na tela-->
						<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
					</a>
				</div>
				<!--Coluna de descrição-->
				<div class="col-sm-6 col-descricao">
					<h2>{{produto.nome_prod_longo}}</h2>
					<div class="box-valor">
						<div class="text-noboleto text-arial-cinza">no boleto</div>
						<div class="text-por text-arial-cinza">por</div>
						<div class="text-reais text-roxo">R$</div>
						<div class="text-valor text-roxo">{{produto.preco}}</div>
						<div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
						<div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
						<div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>	
					</div><!--class="box-valor"-->

					<!--Botão de comprar, direcionando para o meu carrinho-->
					<a href="carrinhoAdd-{{produto.id_prod}}" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
				</div><!--class="col-sm-6"-->
			</div><!--class="item"-->
		</div><!--id="destaque-produtos"-->

		<!--Setas do produtos-->
		<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
		<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>

	</div><!--class="container"-->

	<!--Promoções-->
	<div id="promocoes" class="container">
		
		<div class="row">
			<div class="col-md-2">
				
				<div class="box-promocao box-1">
					<p>escolha por desconto</p>
				</div>

			</div>
			<div class="col-md-10">
				
				<div class="row-fluid">
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">40</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">60</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">80</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">85</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>

				</div><!--class="row-fluid"-->
			</div><!--class="col-md-10"-->
		</div><!-- class="row"-->
	</div><!--id="promocoes" class="container"-->

	<!--Mais Buscados-->
	<div id="mais-buscados" class="container">
		
		<div class="row text-center title-default-roxo">
			<h2>os mais buscados</h2>
			<hr>	
		</div>

		<div class="row">
			
			<div class="col-md-3" ng-repeat="produto in buscados">
				<div class="box-produto-info">
					<a href="produto-{{produto.id_prod}}">
						<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class="produto-img">
						<h3>{{produto.nome_prod_longo}}</h3>
						<!--Plugin do jQuery nas estrelinhas -->
						<div class="estrelas" data-score="{{produto.media}}"></div>
						<div class="text-qtd-reviews text-arial-cinza">({{produto.total_reviews}})</div>
						<div class="text-valor text-roxo">R$ {{produto.total}}</div>
						<div class="text-parcelado text-arial-cinza">{{produto.parcelas}}x de R$ {{produto.parcela}} sem juros</div>
					</a>
				</div><!--class="box-produto-info" -->
			</div><!--class="col-md-3" ng-repeat="produto in buscados"-->
		</div><!--class="row"-->
	</div><!--id="mais-buscados" class="container"-->

</section>

<?php include_once("footer.php");?>

<script>
//Angular
angular.module("shop", []).controller("destaque-controller", function($scope, $http){

	$scope.produtos = [];
	$scope.buscados = [];

	//Essa função só vai ser chamda depois que os dados estiver renderizados na tela
	var initCarousel = function(){

		$("#destaque-produtos").owlCarousel({
	 
	      autoPlay: 5000,
	      items : 1,
	      singleItem: true
	 
	  	});

		//Plugin para usar as setas nos items
	  	var owlDestaque = $("#destaque-produtos").data('owlCarousel');

	  	$('#btn-destaque-prev').on("click", function(){

	  		owlDestaque.prev();

	  	});

	  	$('#btn-destaque-next').on("click", function(){

	  		owlDestaque.next();

	  	});

	};

	$http({
	  method: 'GET',
	  url: 'produtos'
	}).then(function successCallback(response) {

	    $scope.produtos = response.data;

	    //Função para aguardar o delay do angularJS, ele vai parar o Javascript pra o angular carregar as informações.
	    setTimeout(initCarousel, 1000);

	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });

	$http({
	  method: 'GET',
	  url: 'produtos-mais-buscados'
	}).then(function successCallback(response) {

	    $scope.buscados = response.data;

	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });

	

});
angular.module("shop", []).controller("destaque-controller", function($scope, $http){

	$scope.produtos = [];
	$scope.buscados = [];

	var initCarousel = function(){

		$("#destaque-produtos").owlCarousel({
	 
	      autoPlay: 5000,
	      items : 1,
	      singleItem: true
	 
	  	});

	  	var owlDestaque = $("#destaque-produtos").data('owlCarousel');

	  	$('#btn-destaque-prev').on("click", function(){

	  		owlDestaque.prev();

	  	});

	  	$('#btn-destaque-next').on("click", function(){

	  		owlDestaque.next();

	  	});

	};

	$http({
	  method: 'GET',
	  url: 'produtos'
	}).then(function successCallback(response) {

	    $scope.produtos = response.data;

	    setTimeout(initCarousel, 1000);

	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });

	var initEstrelas = function(){
		//Plugin das estrelas de qualidade
		$('.estrelas').each(function(){

	  		$(this).raty({
		  		starHalf    : 'lib/raty/lib/images/star-half.png',                                // The name of the half star image.
				starOff     : 'lib/raty/lib/images/star-off.png',                                 // Name of the star image off.
				starOn      : 'lib/raty/lib/images/star-on.png',
				score		: parseFloat($(this).data("score"))
		  	});

	  	});

	};

	$http({
	  method: 'GET',
	  url: 'produtos-mais-buscados'
	}).then(function successCallback(response) {

	    $scope.buscados = response.data;

	    setTimeout(initEstrelas, 1000);

	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });

	

});
</script>