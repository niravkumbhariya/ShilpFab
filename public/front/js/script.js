$(document).ready(function(){
	
	var headerHeight = $('header').outerHeight();
	$('.main-wrapper').css('padding-top', headerHeight + 'px');

	$(window).resize(function () {
    	var newHeaderHeight = $('header').outerHeight();
    	$('.main-wrapper').css('padding-top', newHeaderHeight + 'px');
  	});

	$('.banner-wrapper').owlCarousel({
	    loop:true,
	    nav:false,
	    dots: false,
	    autoplay:true,
		autoplayTimeout:4000,
		animateOut: 'fadeOut',
		items: 1
	});

	$('.service-box-wrapper').owlCarousel({
	    loop:false,
	    margin:15,
	    nav:false,
	    dots: true,
	    autoplay:false,
	    responsive:{
	        0:{
	            items:1,
	            nav:false
	        },
	        768:{
	            items:2
	        },
	        991: {
	        	items:3
	        },
	        1200:{
	            items:4
	        }
	    }
	});

	// hamburger menu
	$('.hamburger-menu').on('click', function () {
    	$(this).toggleClass('active');
    	$('html').toggleClass('hamburger-active');
  	});

	// scroll animation aos js
  	AOS.init();
});