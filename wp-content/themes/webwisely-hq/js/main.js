// JavaScript Document

$(document).ready(function() {
	
	/***********************************
	** Getting around iOS's Safari UI elements
	***********************************/
	function setDrawerHeight() {
	  const vh = window.innerHeight * 0.01;
	  document.documentElement.style.setProperty('--vh', `${vh}px`);
	}
	setDrawerHeight();
	window.addEventListener('resize', setDrawerHeight);
    
	
	/***********************************
	** Form Control
	***********************************/
	var form_click = $(".form-click");
	var form = $("#form-container");
	form_click.on("click", function() {
		form.toggleClass("open");
	});
	
	
	/***********************************
	** Menu Drawer Control
	***********************************/
	var menu_click = $(".menu-click");
	var menu_drawer = $(".menu-drawer__layer-1");
	menu_click.on("click", function() {
		menu_drawer.toggleClass("open");
		$("body").toggleClass("static");
	});
	
	
	/***********************************
	** Handling the header change on scroll
	***********************************/
    $(function() {
        //caches a jQuery object containing the header element
        var header = $("header");
        header.addClass("noscroll");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 100) {
                header.addClass("scrolled");
                header.removeClass("noscroll");
            } else {
                header.addClass("noscroll");
                header.removeClass("scrolled");
            }
        });
    });
		
		
	/***********************************
	** Click to scroll to on-page anchor tag
	***********************************/
    var container = 'html, body';
    var theOffset = 112;
    if ($(window).width() > 768) {
        var theOffset = 97;
    }
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
					$(container).animate({
						scrollTop: target.offset().top - theOffset
					}, 500);
					return false;
			}
		}
	});
	
    
	/***********************************
	** Element Slide-In Animations
	***********************************/
	$(function() {
		var $elements = $('.animateBlock.notAnimated'); //contains all elements of nonAnimated class
		var $window = $(window);
		
		$window.on('scroll', function(e) {
			$elements.each(function(i, elem) { //loop through each element
				if ($(this).hasClass('animated')) // check if already animated
				return;
				animateMe($(this));
			});			
		});
	});
	function animateMe(elem) {
		var winTop = $(window).scrollTop(); // calculate distance from top of window
		var winBottom = winTop + $(window).height();
		var elemTop = $(elem).offset().top; // element distance from top of page
		var elemBottom = elemTop + $(elem).height();

		if ((elemBottom <= winBottom) && (elemTop >= winTop)) {
			// exchange classes if element visible
			$(elem).removeClass('notAnimated').addClass('animated');
		}
	}
    
    
	/***********************************
	** Slideshow Control
	***********************************/
    $('.testimonials-slider').slick({
		autoplay: true,
  		autoplaySpeed: 4000,
  		arrows: false,
  		dots: true,
		appendDots: '.slider__pager',
  		dotsClass: 'pager__dots'
	});
	
	
	
	
	
    
});