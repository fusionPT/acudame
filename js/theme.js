jQuery(document).ready(function($) {
  $('.flexslider').flexslider();

	//Burger menu
	
	$( ".top-bar .pull" ).on( "click", function() {
		if($("nav").css("display") == "none"){
			$("nav").css("display","block");
		} else {
			$("nav").css("display","none");
		}
	});



});

