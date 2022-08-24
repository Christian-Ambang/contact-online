$( document ).ready(function() {
	$(".nav .menu,.nav h1").click(function() {
		$(".contenu .menu").slideToggle(3000);
		
		
		var MenuShow = $(".contenu .menu").attr("style");
		
		if(	$(".nav .menu img").attr("src") == "imgs/btn-menu.png" ){
		   	$(".nav .menu img").attr("src","imgs/btn-menu-close.png");
		   } else if ($(".nav .menu img").attr("src") == "imgs/btn-menu-close.png" ) {
		   	$(".nav .menu img").attr("src","imgs/btn-menu.png");
		   }
		
		
		if(	$(".nav .menu img").attr("src") == "../imgs/btn-menu.png" ){
		   	$(".nav .menu img").attr("src","../imgs/btn-menu-close.png");
		   } else if ($(".nav .menu img").attr("src") == "../imgs/btn-menu-close.png") {
		   	$(".nav .menu img").attr("src","../imgs/btn-menu.png");
		   }
	
	});

});