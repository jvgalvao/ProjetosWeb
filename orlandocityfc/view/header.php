<!--Testar conexão php com o banco de dados!-->
<!--?php

require_once("inc/configuration.php");

$sql = new Sql();

$result = $sql->query("SELECT * FROM tb_produtos;");

//Enquanto tiver produtos 
while ($row = mysqli_fetch_array($result)){

	var_dump($row);
}

exit;

?!-->
<!DOCTYPE html>
<html ng-app="shop">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1">
		<!-- device-with: para pegar a largura maxima do aparelho fazendo automaticamente, initial-scale:qual é a escala inicial do tamanho da fonte,user-scalable:se o usuario pode da zoom na pagina -->
		<title>Orlando City</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="lib/owl.carousel2/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="lib/owl.carousel2/dist/assets/owl.theme.default.min.css">-->
		<link rel="stylesheet" href="lib/owl.carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="lib/raty/lib/jquery.raty.css">
		<link rel="stylesheet" href="css/orlando.css">
		<link rel="stylesheet" href="css/orlando-mobile.css">

		<script src="lib/angularjs/angular.min.js"></script>

	</head>
	<body>

		<header><!-- Na hora que o buscador entrar no meu site ele já vai perceber qual é o cabeçalho -->
			
			<!--Mascara escura do meu menu-->
			<div id="menu-mobile-mask" class="visible-xs"></div>

			<!--Menu do meu smartphone-->
			<div id="menu-mobile" class="visible-xs">
				
				<ul class="list-unstyled">
					<li><a href="videos">Videos</a></li>
					<li><a href="#">Tickets</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Schedule</a></li>
				</ul>

				<!--Opção de fechar o menu-->
				<div class="bar-close">
					<button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
				</div>

			</div>
			
			<div class="container"><!--Utilizado para centralizar minha logo Orlando City-->
				<img id="logotipo" src="img/orlando-logo.png" alt="Logotipo">
			</div>
			<!--Barra que vai receber os itens dos times da liga-->
			<div class="header-black">
				<!--Responsavel por centralizar meu conteudo no layout-->
				<div class="container">

					<!--Barra de pesquisa do smartphone -->
					<input type="search" id="input-search-mobile" class="visible-xs" placeholder="search...">
					
					<!--menu hot dog e lupa de pesquisa para smartphone-->
					<button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>
					<button id="btn-search" type="button"><i class="fa fa-search"></i></button>

					<!--O pull-right faz empurrar automaticamente para direita-->
					<ul class="pull-right">
						<li class="club-01"><a href="#"></a></li>
						<li class="club-02"><a href="#"></a></li>
						<li class="club-03"><a href="#"></a></li>
						<li class="club-04"><a href="#"></a></li>
						<li class="club-05"><a href="#"></a></li>
						<li class="club-06"><a href="#"></a></li>
						<li class="club-07"><a href="#"></a></li>
						<li class="club-08"><a href="#"></a></li>
						<li class="club-09"><a href="#"></a></li>
						<li class="club-10"><a href="#"></a></li>
						<li class="club-11"><a href="#"></a></li>
						<li class="club-12"><a href="#"></a></li>
						<li class="club-13"><a href="#"></a></li>
						<li class="club-14"><a href="#"></a></li>
						<li class="club-15"><a href="#"></a></li>
						<li class="club-16"><a href="#"></a></li>
						<li class="club-17"><a href="#"></a></li>
						<li class="club-18"><a href="#"></a></li>
						<li class="club-19"><a href="#"></a></li>
						<li class="club-20"><a href="#"></a></li>
						<li class="club-21"><a href="#"></a></li>
						<li class="club-22"><a href="#"></a></li>
					</ul>
				</div><!--class="container"-->
			</div><!--class="header-black"-->

			<div class="container"><!--Responsavel por centralizar meu conteudo no layout-->
				
				<div class="row"><!--Texto-->
						
					<!--O pull-right faz empurrar automaticamente para direita-->	
					<nav id="menu" class="pull-right">
						<!--Menu de navegação-->
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="videos">Videos</a></li>
							<li><a href="#">Tickets</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Schedule</a></li>
							<li class="search">
								<div class="input-group">
							      <input type="search" placeholder="search..." id="input-search">
							      <span class="input-group-btn">
							        <button type="button"><i class="fa fa-search"></i></button>
							      </span>
							    </div><!-- /input-group -->
							</li>
						</ul>
					</nav>
				</div><!--class="row"-->
			</div><!--class="container"-->				

		</header>
