$(document).ready(function(){
	$('.service-box-wrapper').owlCarousel({
	    loop:true,
	    margin:15,
	    nav:false,
	    dots: false,
	    autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    }
	});

	// hamburger menu
	$('.hamburger-menu').on('click', function () {
    	$(this).toggleClass('active');
    	$('html').toggleClass('hamburger-active');
  	});
});
