$(document).ready(function(){
/*Ao passar o cursor do mouse no logotipo haverá alteração na cor e na fonte do Banner Principal */
	$("#logotipo").on("mouseover",function(){
		
		$("#banner h1").addClass("efeito");
/*Quando o mouse sair do logotipo o Banner Principal volta ao normal*/
	}).on("mouseout", function(){

		$("#banner h1").removeClass("efeito");

	});
/*Quando alguem clicar dentro da barra de busca, ela irá aumentar*/
	$("#input-search").on("focus", function(){

		$("li.search").addClass("ativo");

/*Quando deixa a caixa, ela voltar ao normal*/  
	}).on("blur", function(){

		$("li.search").removeClass("ativo");				

	});

  //Plugin do carrossel da news
	$(".thumbnails").owlCarousel({
 
      //autoPlay: 3000,
      items : 4
 
  	});
    //Plugin do carrossel2 da news
    //  $(".thumbnails").owlCarousel({
    //      loop:true,
    //      margin: 10,
    //      //nav: true,
    //      //navText:["Anterior", "Próximo"],
    //        responsive: {
    //          0 :{
    //            items: 1
    //          },
    //          480 :{
    //            items: 3
    //          },
    //          768 :{
    //            items: 4
    //          }
    //        }
    //    });

    //Plugin para usar as setas do news 
  	var owl = $(".thumbnails").data('owlCarousel');

  	$('#btn-news-prev').on("click", function(){

  		owl.prev();

  	});

  	$('#btn-news-next').on("click", function(){

  		owl.next();

  	});

    //Plugin para o botão do top 
  	$("#page-up").on("click", function(event){

  		$("body").animate({
  			scrollTop:0
  		}, 1000);

  		event.preventDefault();

  	});
    //Plugin de abrir e fechar do menu
  	$("#btn-bars").on("click", function(){

  		$("header").toggleClass("open-menu");

  	});

  	$("#menu-mobile-mask, .btn-close").on("click", function(){

  		$("header").removeClass("open-menu");


  	});
    //Plugin de barra de pesquisa
  	$("#btn-search").on("click", function(){

  		$("header").toggleClass("open-search");
  		$("#input-search-mobile").focus();

  	});

});