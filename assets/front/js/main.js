(function ($) {
	'use strict';

	//menu options
	var fixed_top = $(".main-menu");
	var scroll_top_open = $(".scroll-top");

	$(window).on('scroll', function () {

		if ($(this).scrollTop() > 100) {
			fixed_top.addClass("animated fadeInDown menu-fixed");
		} else {
			fixed_top.removeClass("animated fadeInDown menu-fixed");
		}

		if ($(this).scrollTop() > 800) {
			scroll_top_open.addClass("open");
		} else {
			scroll_top_open.removeClass("open");
		}
	});


	//header search
	$('.menu-search').on('click', function () {
		$('.menu-search-form').addClass('open');
		$('.nar-taneleri-back').addClass('active');
		$("body").addClass("overflow-none");
		setTimeout(function (){
			$('#hd-search').focus();
		}, 100);
	});
	$('.menu-search-close').on('click', function () {
		$('.menu-search-form').removeClass('open');
		$('.nar-taneleri-back').removeClass('active');
		$("body").removeClass("overflow-none");
		$('#hd-search').val("");
	});

	//nar taneleri back

	$('.nar-taneleri-back').on('click', function () {
		$('.menu-search-form').removeClass('open');
		$('.nar-taneleri-back').removeClass('active');
		$("body").removeClass("overflow-none");
		$('#hd-search').val("");
	});

	// SEARCH AREA KEYBOARD EVENTS

	document.addEventListener('keydown', function (event) {
		if (event.key === "Escape") {
			$("body").removeClass("overflow-none")
			$('#hd-search').val("");
			$('.nar-taneleri-back').removeClass('active');
			$('.menu-search-form').removeClass('open');
		}
	});

	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$('a.page-scroll').on('click', function (event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});


	jQuery(window).on('load', function () {

		$('body').addClass('loaded');

		$('.my-gallery').fancybox({
			loop: true,
			protect: true,
			toolbar: true,
			buttons: [
				"zoom",
				"fullScreen",
				"slideShow",
				"download",
				"close",
				"thumbs",
			],
			toolbar: true,
			protect: true,
			infobar: true,
			thumb: true,
		});

		//Isotope activation js codes
		var $gellary_img = $('.gallery-items').isotope({
			itemSelector: '.gallery-item',
			percentPosition: true,
			transitionDuration: '0.5s',
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: '.gallery-item',
				gutter: 30
			},
			getSortData: {
				name: '.name',
				symbol: '.symbol',
				number: '.number parseInt',
				category: '[data-category]',
				weight: function (itemElem) {
					var weight = $(itemElem).find('.weight').text();
					return parseFloat(weight.replace(/[\(\)]/g, ''));
				}
			}
		});


		// filter functions
		var filterFns = {
			// show if number is greater than 50
			numberGreaterThan50: function () {
				var number = $(this).find('.number').text();
				return parseInt(number, 10) > 50;
			},
			// show if name ends with -ium
			ium: function () {
				var name = $(this).find('.name').text();
				return name.match(/ium$/);
			}
		};

		// bind filter button click
		$('.gallery-menu').on('click', 'li', function () {
			var filterValue = $(this).attr('data-filter');
			// use filterFn if matches value
			filterValue = filterFns[filterValue] || filterValue;
			$gellary_img.isotope({
				filter: filterValue
			});
		});


		// change is-checked class on buttons
		$('.gallery-menu').each(function (i, liList) {
			var $liList = $(liList);
			$liList.on('click', 'li ', function () {
				$liList.find('.active').removeClass('active');
				$(this).addClass('active');
			});
		});
	});


	//nst slider
	$('.nstSlider').nstSlider({
		"rounding": {
			"100": "1000",
			"1000": "10000",
			"10000": "100000"
		},
		"left_grip_selector": ".leftGrip",
		"right_grip_selector": ".rightGrip",
		"value_bar_selector": ".bar",
		"value_changed_callback": function (cause, leftValue, rightValue) {
			var $container = $(this).parent();
			$container.find('.leftLabel').text(leftValue);
			$container.find('.rightLabel').text(rightValue);
		}
	});


	//flex slider
	$(window).on('load', function () {
		// The slider being synced must be initialized first
		$('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 84,
			itemMargin: 4,
			asNavFor: '#slider'
		});

		$('#slider').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#carousel"
		});
	});


	//Product list grid view
	var list = $("#list");
	var grid = $("#grid");
	list.on('click', function () {
		$('.product-item-grid').animate({
			opacity: 0
		}, function () {
			$('.grid').removeClass('grid-active');
			$('.list').addClass('list-active');
			$('.product-item-grid').attr('class', 'product-item-list shadow');
			$('.product-item-list').stop().animate({
				opacity: 1
			});
		});
	});

	grid.on('click', function () {
		$('.product-item-list').animate({
			opacity: 0
		}, function () {
			$('.list').removeClass('list-active');
			$('.grid').addClass('grid-active');
			$('.product-item-list').attr('class', 'product-item-grid shadow');
			$('.product-item-grid').stop().animate({
				opacity: 1
			});
		});
	});



	//Banner slider
	var swiper = new Swiper('.banner-slider', {
		slidesPerView: 1,
		pagination: '.swiper-pagination',
		paginationClickable: true,
		// autoplay: 3500,
		loop: true
	});


	//Testimonial slider
	var swiper = new Swiper('.testimonial-slider', {
		slidesPerView: 3,
		autoplay: 2000,
		spaceBetween: 30,
		breakpoints: {
			// when window width is <= 580px
			580: {
				slidesPerView: 1
			},
			// when window width is <= 991px
			991: {
				slidesPerView: 2
			}
		}
	});


	//Testimonial slider two
	var swiper = new Swiper('.testimonial-slider-two', {
		slidesPerView: 2,
		autoplay: 3000,
		spaceBetween: 30,
		breakpoints: {
			// when window width is <= 580px
			767: {
				slidesPerView: 1
			},
		}
	});

	//Testimonial slider three
	var swiper = new Swiper('.testimonial-slider-three', {
		slidesPerView: 1,
		//autoplay: 2000,
	});


	//Partner slider
	var swiper = new Swiper('.partner-slider', {
		slidesPerView: 5,
		autoplay: 2000,
		loop: true,
		spaceBetween: 20,
		breakpoints: {
			// when window width is <= 480px
			480: {
				slidesPerView: 1
			},
			// when window width is <= 580px
			580: {
				slidesPerView: 2
			},
			// when window width is <= 767px
			767: {
				slidesPerView: 3
			},
			// when window width is <= 991px
			991: {
				slidesPerView: 4
			}
		}
	});


	//Teacher slider
	var swiper = new Swiper('.teacher-slider', {
		slidesPerView: 4,
		// autoplay: 5000,
		spaceBetween: 20,
		loop: true,
		breakpoints: {
			// when window width is <= 480px
			480: {
				slidesPerView: 1
			},
			// when window width is <= 991px
			991: {
				slidesPerView: 2
			},
			// when window width is <= 1199px
			1199: {
				slidesPerView: 3
			}
		}
	});

	var swiper = new Swiper('.gallery-slider', {
		slidesPerView: 4,
		autoplay: 2000,
		loop: true,
		spaceBetween: 20,
		breakpoints: {
			// when window width is <= 480px
			480: {
				slidesPerView: 1
			},
			// when window width is <= 991px
			991: {
				slidesPerView: 2
			},
			// when window width is <= 1199px
			1199: {
				slidesPerView: 4
			}
		}
	});

	var swiper = new Swiper('.dx-event-slider', {
		slidesPerView: 4,
		autoplay: 2000,
		loop: true,
		spaceBetween: 20,
		breakpoints: {
			// when window width is <= 480px
			480: {
				slidesPerView: 1
			},
			// when window width is <= 991px
			991: {
				slidesPerView: 2
			},
			// when window width is <= 1199px
			1199: {
				slidesPerView: 4
			}
		}
	});


	//js code for mobile menu 
	$('.navbar-toggle').on('click', function (e) {
		$('body').toggleClass('open-mobile-menu')
	});

	$('.mobile-menu>ul>li>a,.mobile-menu ul.mobile-submenu>li>a').on('click', function (e) {
		var element = $(this).parent('li');
		if (element.hasClass('submenu')) {
			$('.dropdown-submenu>a').on("click", function (e) {
				e.preventDefault();
			});
		}
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp(1500, "swing");
		} else {
			element.addClass('open');
			element.children('ul').slideDown(1500, "swing");
			element.siblings('li').children('ul').slideUp(1500, "swing");
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp(1500, "swing");
		}
	});

	$('.pro-description ul li').on('click', function () {
		$(this).addClass('active').siblings().removeClass('active');
	});

})(jQuery);