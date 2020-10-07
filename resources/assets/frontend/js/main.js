$(function ($) {
    "use strict";

    //veno-box js
    $('.venobox').venobox();

    var $window = $(window);
    var html_body = $('html, body')

    //for scroll bottom to top js here
    if ($('.totop').length) {
        var scrollTrigger = 150, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('.totop').addClass('show');
                } else {
                    $('.totop').removeClass('show');
                }
            };

        backToTop();
        $window.on('scroll', function () {
            backToTop();
            if ($window.scrollTop()) {
                $("#mainHeader").addClass('stiky');
            } else {
                $("#mainHeader").removeClass('stiky');
            }
        });

        $('.totop').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

 
    // counter js
    $('.count').counterUp({
        delay: 10,
        time: 2000
    });

        //Site Preloader
        $window.on('load', function () {
            var $sitePreloaderSelector = $('.site-preloader');
            $sitePreloaderSelector.fadeOut(500);
        });

    $(document).ready(function () {

        // product Details page item ++/--
        $(document).on('click', '.qtplus', function () {
            var total = $('.qttotal').text();
            total++;
            $('.qttotal').text(total);
        });
        $(document).on('click', '.qtminus', function () {
            var total = $('.qttotal').text();
            total--;
            if (total > 0) {
                $('.qttotal').text(total);
            }
        });

        // :: 2.0 Slick Active Code
        var slikkfor = $('.slider-for');
        if (slikkfor.length > 0) {
            slikkfor.slick({
                slidesToShow: 1,
                speed: 500,
                arrows: false,
                fade: true,
                asNavFor: '.product-deails-thumb'
            });
        }
        var productDetailsThumb = $('.product-deails-thumb');

        if (productDetailsThumb.length > 0) {

            productDetailsThumb.slick({
                slidesToShow: 3,
                slidesToScroll: 3,
                speed: 500,
                asNavFor: '.slider-for',
                dots: false,
                focusOnSelect: true,
                slide: 'li',
                autoplay: true,
                arrows: false
            });

        }

            // Service slider
    $('.serviceSlider').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            550: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    })

    // topClassSlider js
    $('.topClassSlider').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })

    // testimonialSlider
    $('.testimonialSlider').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        nav: false,
        dots: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })


    });

    //define variable for store last scrolltop
    var lastScrollTop = '';
    $window.on('scroll', function () {
        //back to top show/hide
        var ScrollTop = $('.totop');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
    });


}(jQuery));