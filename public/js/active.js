/* =====================================
Template Name: Immolax - Real Estate Services HTML5 Template
Author Name: Vecuro
Description: Real Estate Services HTML5 Template
Version: 1.0.0
========================================*/

/*======================================
[ JS Table Of Contents ]
* Header Sticky JS
* Mobile Menu JS
* Header Search Form JS
* Maginific Popup JS
* Price Range JS
* Hero Slider JS
* Hero Two Slider JS
* Work Process Slider JS
* Testimonial Slider JS
* Agents Slider JS
* Blog Slider JS
* Mindset Slider JS
* Property Booking JS
* Recent Property JS
* Similar Property  JS
* Why Choose JS
* Popular Property JS
* Property Sidebar JS
* Portfolio JS
* BX Slider JS
* Video Popup JS
* Aos Animate JS
* CounterUp JS
* NiceSelect JS
* DatePicker JS
* Scroll To Top JS
* Preloader JS
========================================*/

(function ($) {
	"use strict";
	$(document).on('ready', function () {

		/*====================================
			Header Sticky JS
		======================================*/
		var activeSticky = $("#active-sticky"),
			winDow = $(window);
		winDow.on("scroll", function () {
			var scroll = $(window).scrollTop(),
				isSticky = activeSticky;
			if (scroll < 200) {
				isSticky.removeClass("is-sticky");
			} else {
				isSticky.addClass("is-sticky");
			}
		});

		/*====================================
			Mobile Menu JS
		======================================*/
		var $offcanvasNav = $("#offcanvas-menu a");
		$offcanvasNav.on("click", function () {
			var link = $(this);
			var closestUl = link.closest("ul");
			var activeLinks = closestUl.find(".active");
			var closestLi = link.closest("li");
			var linkStatus = closestLi.hasClass("active");
			var count = 0;

			closestUl.find("ul").slideUp(function () {
				if (++count == closestUl.find("ul").length)
					activeLinks.removeClass("active");
			});
			if (!linkStatus) {
				closestLi.children("ul").slideDown();
				closestLi.addClass("active");
			}
		});


		/*====================================
			Maginific Popup JS
		======================================*/
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
			},
		});

		/*====================================
			Search Box Popup JS
		======================================*/
		function popupSarchBox($searchBox, $searchOpen, $searchCls, $toggleCls) {
			$($searchOpen).on('click', function (e) {
				e.preventDefault();
				$($searchBox).addClass($toggleCls);
			});
			$($searchBox).on('click', function (e) {
				e.stopPropagation();
				$($searchBox).removeClass($toggleCls);
			});
			$($searchBox).find('form').on('click', function (e) {
				e.stopPropagation();
				$($searchBox).addClass($toggleCls);
			});
			$($searchCls).on('click', function (e) {
				e.preventDefault();
				e.stopPropagation();
				$($searchBox).removeClass($toggleCls);
			});
		};
		popupSarchBox('.popup-search-box', '.searchBoxTggler', '.searchClose', 'show');


		/*====================================
			Price Range JS
		======================================*/
		$(function () {
			$("#slider-range-one").slider({
				range: true,
				min: 0,
				max: 12980952,
				values: [0, 12980952],
				slide: function (event, ui) {
					$("#amount-one").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount-one").val("$" + $("#slider-range-one").slider("values", 0) +
				" - $" + $("#slider-range-one").slider("values", 1));
		});
		$(function () {
			$("#slider-range-two").slider({
				range: true,
				min: 0,
				max: 12980952,
				values: [0, 12980952],
				slide: function (event, ui) {
					$("#amount-two").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount-two").val("$" + $("#slider-range-two").slider("values", 0) +
				" - $" + $("#slider-range-two").slider("values", 1));
		});
		$(function () {
			$("#slider-range-three").slider({
				range: true,
				min: 0,
				max: 12980952,
				values: [0, 12980952],
				slide: function (event, ui) {
					$("#amount-three").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount-three").val("$" + $("#slider-range-three").slider("values", 0) +
				" - $" + $("#slider-range-three").slider("values", 1));
		});

		/*====================================
			Hero Slider JS
		======================================*/
		$(".hero-slider").slick({
			autoplay: false,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 1,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: false,
			arrows: false,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 800,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
			]
		});



		$('.hero-thumb').each(function(){

			$(this).on('click', function(e){
				e.preventDefault();
				var slide = $(this).data('nav-for');
				var index = $(this).data('slide-go');
				$(slide).slick('slickGoTo', index)
				$(this).siblings().removeClass('active');
				$(this).addClass('active');
			});

			var $slide = $(this).data('nav-for');
			$($slide).on('afterChange', function (event, slick, currentSlide, nextSlide) {
				var index = currentSlide;
				$('.hero-thumb').each(function(){
					var cThumb = $(this);
					if(cThumb.data('slide-go') == index) {
						cThumb.addClass('active');
						cThumb.siblings().removeClass('active')
					}
				})
			})

		})




		/*====================================
			Hero Two Slider JS
		======================================*/
		$(".hero-style2-slider").slick({
			autoplay: false,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 1,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: true,
			arrows: false,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 800,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
			]
		});

		/*====================================
			Work Process Slider
		======================================*/
		$(".work-process-slider").slick({
			autoplay: true,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 3,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: false,
			arrows: false,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 1200,
					settings: {
						arrows: false,
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 800,
					settings: {
						arrows: false,
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
			]
		});

		/*====================================
			Testimonial Slider JS
		======================================*/
		$('.testimonial-nav').slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			asNavFor: '.testimonial-content',
			autoplay: false,
			focusOnSelect: true,
			arrows: false,
			centerMode: false,
			speed: 700,
			autoplaySpeed: 3500,
			centerPadding: '0px',
			prevArrow: '<button class="Prev"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 1200,
					settings: {
						arrows: false,
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
			]
		});

		$('.testimonial-content').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			fade: true,
			arrows: false,
			centerMode: true,
			speed: 700,
			autoplaySpeed: 3500,
			centerPadding: '0px',
			asNavFor: '.testimonial-nav'
		});


		/*====================================
			Agents Slider
		======================================*/
		$(".agents-slider").slick({
			autoplay: true,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 4,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: false,
			arrows: false,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 1200,
					settings: {
						arrows: false,
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 992,
					settings: {
						arrows: false,
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
			]
		});

		/*====================================
			Blog Slider
		======================================*/
		$(".blog-slider").slick({
			autoplay: true,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 3,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: false,
			arrows: false,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 1200,
					settings: {
						arrows: false,
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 992,
					settings: {
						arrows: false,
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
			]
		});

		/*====================================
			Mindset Slider
		======================================*/
		$(".mindset-slider").slick({
			autoplay: true,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 3,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: false,
			arrows: false,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 1200,
					settings: {
						arrows: false,
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 800,
					settings: {
						arrows: false,
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
			]
		});


		/*====================================
			Property Booking Slider
		======================================*/
		$(".p-booking-slider").slick({
			autoplay: false,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 1,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: false,
			arrows: true,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 800,
					settings: {
						arrows: true,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: true,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: true,
						slidesToShow: 1,
					}
				},
			]
		});

		/*====================================
			Recent Property Slider
		======================================*/
		$(".recent-property-slider").slick({
			autoplay: false,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 3,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: false,
			arrows: true,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 1200,
					settings: {
						arrows: false,
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 800,
					settings: {
						arrows: true,
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
			]
		});

		/*====================================
			Similar Property Slider
		======================================*/
		$(".similar-property-slider").slick({
			autoplay: true,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 2,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: false,
			arrows: false,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 800,
					settings: {
						arrows: false,
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
			]
		});


		/*====================================
			Why Choose Slider
		======================================*/
		$(".why-choose-slider").slick({
			autoplay: false,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 1,
			margin: 30,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: false,
			arrows: true,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-long-arrow-alt-up" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-long-arrow-alt-down" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 800,
					settings: {
						arrows: true,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: true,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: true,
						slidesToShow: 1,
					}
				},
			]
		});

		/*====================================
			Popular Property Slider
		======================================*/
		$(".popular-p-slider").slick({
			autoplay: true,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 3,
			margin: 30,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: false,
			arrows: true,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 1200,
					settings: {
						arrows: false,
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
			]
		});

		/*====================================
			Property Sidebar Slider JS
		======================================*/
		$(".properties-s-slider").slick({
			autoplay: false,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 1,
			pauseOnHover: true,
			centerMode: true,
			cssEase: 'linear',
			infinite: true,
			centerPadding: '0px',
			dots: true,
			arrows: false,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 800,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				},
			]
		});

		/*====================================
			Portfolio JS
		======================================*/
		$('#portfolio-item').cubeportfolio({
			filters: '#portfolio-nav',
			loadMore: '#loadMore',
			loadMoreAction: 'click',
			defaultFilter: '*',
			layoutMode: 'grid',
			animationType: 'sequentially',
			gridAdjustment: 'responsive',
			cols: 3,
			gapHorizontal: 30,
			gapVertical: 30,
			mediaQueries: [{
				width: 1100,
				cols: 3,
			}, {
				width: 480,
				cols: 2,
			}, {
				width: 0,
				cols: 1,
			}],
			caption: 'overlayBottomPush',
			displayType: 'sequentially',
			displayTypeSpeed: 80,

			// lightbox
			lightboxDelegate: '.cbp-lightbox',
			lightboxGallery: true,
			lightboxTitleSrc: 'data-title',
			lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

		});

		/*======================================
		    BX Slider JS
		======================================*/
		$('.bxslider').bxSlider({
			pagerCustom: '#bx-pager',
			controls: false,
		});


		/*====================================
			Video Popup JS
		======================================*/
		$('.video-popup').magnificPopup({
			type: 'iframe',
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});

		/*====================================
			Aos Animate JS
		======================================*/
		AOS.init({
			duration: 1500,
			disable: !1,
			offset: 0,
			once: !0,
			easing: "ease"
		});

		/*====================================
			CounterUp Js
		======================================*/
		$('.counter').counterUp({
			time: 1000
		});

		/*====================================
			Nice Select JS
		======================================*/
		$('select').niceSelect();

		/*=====================================
			DatePicker JS
		======================================*/
		$('.datetimepicker').datetimepicker({
			timepicker: true,
			datepicker: true,
			format: 'y-m-d H:i',
			hours12: false,
			step: 30
		});

		// Only Date Picker
		$('.date-pick').datetimepicker({
			timepicker: false,
			datepicker: true,
			format: 'm-d-y',
			step: 10
		});

		// Only Time Picker
		$('.time-pick').datetimepicker({
			datepicker: false,
			timepicker: true,
			format: 'H:i',
			hours12: false,
			step: 10
		});

		/*====================================
			Scroll To Top JS
		======================================*/
		var lastScrollTop = '';
		var scrollToTopBtn = '.scrollToTop'

		function stickyMenu($targetMenu, $toggleClass) {
			var st = $(window).scrollTop();
			if ($(window).scrollTop() > 600) {
				if (st > lastScrollTop) {
					$targetMenu.removeClass($toggleClass);

				} else {
					$targetMenu.addClass($toggleClass);
				};
			} else {
				$targetMenu.removeClass($toggleClass);
			};
			lastScrollTop = st;
		};
		$(window).on("scroll", function () {
			stickyMenu($('.sticky-header'), "active");
			if ($(this).scrollTop() > 400) {
				$(scrollToTopBtn).addClass('show');
			} else {
				$(scrollToTopBtn).removeClass('show');
			}
		});

	


	});
	/*====================================
		Preloader JS
	======================================*/
	$(window).on('load', function (event) {
		$('.preloader').delay(800).fadeOut(500);
	})
	









})(jQuery);