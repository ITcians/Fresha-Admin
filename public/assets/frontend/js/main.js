// js import
(function ($) {
"use strict";
// preloader
	var win = $(window);
	win.on('load', function () {
		$('#loading').fadeOut(500);
	})

// meanmenu
$('#mobile-menu').meanmenu({
	meanMenuContainer: '.mobile-menu',
	meanScreenWidth: "992"
});
$('#mobile-menu-3').meanmenu({
	meanMenuContainer: '.mobile-menu',
	meanScreenWidth: "768"
});

/* info-bar */
$('.info-bar').on('click', function () {
    $('.extra-info').addClass('info-open');
    $('.offcanvas').addClass('active');
})
$('.close-icon,.offcanvas').on('click', function () {
    $('.extra-info').removeClass('info-open');
    $('.offcanvas').removeClass('active');
})

// sidebar
$('.mobile-nav-close,#mobile-nav-close').on('click',function(){
	$('.mobile-nav').removeClass('show-nav');
})
$('.mobile-toggle-bar > button').on('click',function(){
	$('.mobile-nav').addClass('show-nav');
});

win.on('scroll', function () {
	var scroll = win.scrollTop();
	if (scroll < 245) {
		$(".header-sticky").removeClass("sticky");
	} else {
		$(".header-sticky").addClass("sticky");
	}
});
//  popup
$('.search-close button').on('click', function () {
	$('.search-popup').removeClass('visible');
})
$('.search-popup-btn').on('click', function () {
	$('.search-popup').addClass('visible');
})
$('.info__toggle-btn').on('click',function(){
	$('.info__area').addClass('info__visible');
	$('.extra-info').addClass('info-open');
})

$('.info__close-icon,.close-icon button').on('click',function(){
	$('.info__area').removeClass('info__visible');
})

// slider content slide
$('.slider-content-active').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	dots: false,
	fade: true,
	asNavFor: '.slider-tab__thumb',
  });
  $('.slider-tab__thumb').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	asNavFor: '.slider-content-active',
	dots: false,
	centerMode: false,
	focusOnSelect: true,
  });

  // testimonial slide
$('.testimonial__active-4').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	dots: false,
	fade: false,
	asNavFor: '.testimonial__tab-active',
  });
  $('.testimonial__tab-active').slick({
	slidesToShow: 2,
	slidesToScroll: 1,
	asNavFor: '.testimonial__active-4',
	dots: false,
	centerMode: false,
	arrows: false,
	focusOnSelect: true,
	responsive: [
		{
		  breakpoint: 767,
		  settings: {
			slidesToShow: 1
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
  });




// data background
$("[data-background").each(function(){
	$(this).css("background-image","url("+$(this).attr("data-background") + ") ")
})

$("[data-width]").each(function(){
	$(this).css("width",$(this).attr("data-width"))
})


// mainSlider
function mainSlider() {
	var BasicSlider = $('.slider-active');
	BasicSlider.on('init', function (e, slick) {
		var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);
	});
	BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
		var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements);
	});
	BasicSlider.slick({
		autoplay: false,
		autoplaySpeed: 10000,
		dots: false,
		fade: true,
		arrows: false,
		responsive: [
			{ breakpoint: 767, settings: { dots: false, arrows: false } }
		]
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}
}
mainSlider();
$('.testimonial__active').slick({
	dots: true,
	arrows: false,
	infinite: false,
	speed: 500,
	slidesToShow: 2,
	slidesToScroll: 1,
	responsive: [
	  {
		breakpoint: 1024,
		settings: {
		  slidesToShow: 2,
		  slidesToScroll: 1,
		  infinite: true,
		  dots: true
		}
	  },
	  {
		breakpoint: 600,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  },
	  {
		breakpoint: 480,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  }
	  // You can unslick at a given breakpoint now by adding:
	  // settings: "unslick"
	  // instead of a settings object
	]
  });


$('.brand-active').owlCarousel({
    loop:true,
    margin:30,
	items:5,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    nav:false,
	dots:false,
    responsive:{
        0:{
            items:1
        },
		500: {
			items: 2
		},
        767:{
            items:3
        },
        992:{
            items:4
		},
		1400: {
			items: 5,
		}
    }
})
$('.featured-active').owlCarousel({
    loop:true,
    margin: 30,
	items:4,
    nav:false,
	dots:false,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:3
        },
        992:{
            items:4
		},
		1400: {
			items: 4,
		}
    }
})
$('.brand-active-2').owlCarousel({
    loop:true,
    margin:30,
	items:5,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    nav:false,
	dots:false,
    responsive:{
        0:{
            items:1
		},
		600: {
			items: 2,
		},
        767:{
            items:3
        },
        992:{
            items:4
		},
		1400: {
			items: 4,
		}
    }
})
$('.related__post-active').owlCarousel({
    loop:true,
    margin:15,
	items:2,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    nav:false,
	dots:false,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:2
        },
        992:{
            items:2
        }
    }
})

$('.feed-active').owlCarousel({
    loop:true,
    margin:0,
	items:1,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    nav:false,
	dots:false,
})



/* magnificPopup img view */
$('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
	  enabled: true
	}
});

/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});


// isotop
var $grid = $('.gallery').isotope({
	itemSelector: '.gallery__item',
	layoutMode: 'fitRows'
});
$('.gallery').imagesLoaded( function() {
	// init Isotope
	var $gallery = $('.gallery').isotope({
	  itemSelector: '.gallery__item',
	  percentPosition: true,
	  masonry: {
		// use outer width of gallery-sizer for columnWidth
		columnWidth: '.gallery__item',
	  }
	});

// filter items on button click
	$('.portfolio-menu').on( 'click', 'a', function() {
	var filterValue = $(this).attr('data-filter');
	$grid.isotope({ filter: filterValue });
  });

//for menu active class
$('.portfolio-menu li').on('click', function(event) {
	$(this).siblings('.active').removeClass('active');
	$(this).addClass('active');
	event.preventDefault();
});

});








// scrollToTop
$.scrollUp({
	scrollName: 'scrollUp', // Element ID
	topDistance: '300', // Distance from top before showing element (px)
	topSpeed: 300, // Speed back to top (ms)
	animation: 'fade', // Fade, slide, none
	animationInSpeed: 200, // Animation in speed (ms)
	animationOutSpeed: 200, // Animation out speed (ms)
	scrollText: '<i class="fal fa-chevron-double-up"></i>', // Text for element
	activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
});

// WOW active
new WOW().init();
// footer slider
$('.footer__news--active,.testimonial-active-2').slick({
	dots: false,
	infinite: false,
	dots: false,
	speed: 1000,
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
  });
// nice select
$('select').niceSelect();

// news slider
$('.news__active').slick({
	centerMode: false,
	centerPadding: '60px',
	slidesToShow: 4,
	arrows: true,
	prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-long-arrow-right"></i></button>',
	nextArrow: '<button type="button" class="slick-next"><i class="fal fa-long-arrow-left""></i></button>',
	responsive: [
		{
			breakpoint: 480,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		},
	  {
		breakpoint: 768,
		settings: {
		  arrows: false,
		  centerPadding: '40px',
		  slidesToShow: 2
		}
	  },
	  {
		breakpoint: 1200,
		settings: {
		centerMode: false,
		  arrows: false,
		  centerPadding: '40px',
		  slidesToShow: 3
		}
	  }
	]
  });


// news popoup video
        // popup video
$('.news-popup-video').magnificPopup({
	type: 'iframe',
	// other options
		iframe: {
		markup: '<div class="mfp-iframe-scaler">'+
					'<div class="mfp-close"></div>'+
					'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
				'</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

		patterns: {
			youtube: {
			index: 'youtube.com/', 
			id: 'v=',

			src: 'https://www.youtube.com/embed/nDh5UdU_cZM' 
			},

		},

		srcAction: 'iframe_src',
		}
	});

// appoint active
$('.appoint__active').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	dots: true,
	fade: false,
  });
// image move slider
$(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
	  $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
$('.video-popup').magnificPopup({
	type: 'iframe',
})
})(jQuery);