/*

	01. - MobileNav
	02. - Plane animation
	03. - Nav scrollTo


*/




jQuery(function($){



/*==01.==========================================

 	mobileNav
	
===============================================*/

	var mobileMenu = $('.mobile'),
	
    	dropDown = $('.dropdown');
	
	$(mobileMenu).hide();
	
	$('.navbar-toggle').click(function(){

		$(mobileMenu).show();
		
		$('.dropdown ul').hide();
		
		$('.mobile a').click(function(){
		    
		    if ($(mobileMenu).is('.rotateInDownLeft')) {
		        
		        $(mobileMenu).removeClass('animated rotateInDownLeft')
		        
                        .delay(2500)
                       
                        .queue(function() {
                           
                            $(this).addClass('animated hinge');
                            
                            $('#overlay').remove();
                               
                            $(this).dequeue();
                           
                       });
		    }
		        
		 });  
		
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

 	Animate the plane and banner

===============================================*/


	$("#banner").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){

		$(this).removeClass('image-banner').addClass("animation-end");

	});
 	

/*==03.==========================================

 	Nav scrollTo

===============================================*/


    $(function local_scroll(){
    
        $('.scroll-menu a[href*=#]:not([href=#])').click(function() {
        
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
            
                var target = $(this.hash);
                
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');   
             
                if (target.length) {
                
                    $('html,body').animate({
                    
                    scrollTop: target.offset().top -0
                    
                    }, 1400, 'easeInOutExpo');
                    
                    return false;
                
                }
            
            }

        }); 

    }); 


});