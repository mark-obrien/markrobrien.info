/*

	01. - MobileNav
	02. - UI Tabs
	03. - Equal Column Height on Homepage
	04. - Nav Background
	05. - Comment Validation


*/



var $ = jQuery.noConflict();

$(function(){

	'use strict';

/*==01.==========================================

 	mobileNav
	
===============================================*/

	var mobileMenu = $('.mobile');
	
	var dropDown = $('.dropdown');
	
	$(mobileMenu).hide();
	
/*	$('.navbar-toggle').click(function(){
	
		$(mobileMenu).show();
	
		$(mobileMenu).addClass("animated rotateInDownLeft");
		
		$('.dropdown ul').hide();
		
	});*/
	
	$('.navbar-toggle').click(function(){

		$(mobileMenu).show();
		
		$('.dropdown ul').hide();
		
		if ($(mobileMenu).is('.rotateInDownLeft')) {
			$(mobileMenu).removeClass('animated rotateInDownLeft').addClass('animated hinge');
			$('#overlay').remove();
			
		}
		
		else {
			$(mobileMenu).removeClass('animated rotateInUpLeft hinge').addClass('animated rotateInDownLeft');
			$("body").append("<div id='overlay'></div>");
		}
		
	
		
	});
	
	$(dropDown).click(function(e){
	
		e.preventDefault();
		
		$(this).find('ul').first().toggle("slide");
		
	});
 	


/*==02.==========================================

	UI Tabs

===============================================*/

/*$(window).scroll(function() {    
    // find the li with class 'active' and remove it
    $("ul.menu-bottom li.active").removeClass("active");
    // get the amount the window has scrolled
    var scroll = $(window).scrollTop();
    // add the 'active' class to the correct li based on the scroll amount
    if (scroll <= $(window).height()) {
        $("h1").addClass("animated tada");
    }
	else {
	$("h1").removeClass("animated tada");
	}
}); */
 	
      

/*==03.==========================================

 	Equal Column Height on Homepage

===============================================*/

	$("#banner").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
		$(this).removeClass('image-banner').addClass("animation-end");
	});
 	


/*==04.==========================================

 	Nav Background

===============================================*/

$('nav a, #logo').click(function(event) {
        event.preventDefault();
        var link = this;
        $.smoothScroll({
          scrollTarget: link.hash,
		  easing: 'swing',
		  speed: 900,
                   offset: -50,
        });
      });
	  
	$("nav a, #logo").click(function() {
		$("nav a").removeClass("active");
		$(this).addClass("active");
	});
 	


/*==05.==========================================

 	Comment Validation

===============================================*/

 	


});