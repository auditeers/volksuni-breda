(function ($) {
    "use strict";


    jQuery(document).ready(function ($) {


        //------------ off-canvas menu -------------
        $('#mobile-menu-active').metisMenu();

        $('#mobile-menu-active .has-dropdown > a').on('click', function (e) {
            e.preventDefault();
        });

        $(".open-mobile-menu > a").on("click", function (e) {
            e.preventDefault();
            $(".slide-bar").toggleClass("show");
            $("body").addClass("on-side");
            $('.body-overlay').addClass('active');
        });

        $(".close-mobile-menu > a").on("click", function (e) {
            e.preventDefault();
            $(".slide-bar").removeClass("show");
            $("body").removeClass("on-side");
            $('.body-overlay').removeClass('active');
        });

        $('.body-overlay').on('click', function () {
            $(this).removeClass('active');
            $(".slide-bar").removeClass("show");
            $("body").removeClass("on-side");
        });

        $(".reset").click(function () {
            $('.nice-select').niceSelect('update');
            $(this).closest('form').find("input[type=text], textarea,select").val("").removeAttr('checked').removeAttr('selected');
        });


        //------------ Hero slider -------------

        $('.hero_slider_block').owlCarousel({
            loop: true,
            autoHeight: true,
            margin: 0,
            nav: false,
            dot: true,
            autoplay: true,
            autoplayTimeout: 15000,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                }
            }
        })



        //------------ product slider -------------
        $('.product-carousel').owlCarousel({
            items: 4,
            loop: true,
            nav: true,
            margin: 30,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            dots: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplay: false,
            autoplayTimeout: 10000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });

        $('.product-carousel-2').owlCarousel({
            items: 3,
            loop: true,
            nav: true,
            margin: 30,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            dots: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplay: false,
            autoplayTimeout: 10000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });

        $('.testimonial-slider').owlCarousel({
            items: 3,
            loop: true,
            nav: true,
            margin: 30,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            dots: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplay: false,
            autoplayTimeout: 10000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });

        $('.nice-select').niceSelect();

        AOS.init({
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            //delay: 0, // values from 0 to 3000, with step 50ms
            // duration: 400, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
        });

        

    }); //---document-ready-----

    $('.popupClose').click(function (e) { 
        e.preventDefault();
        $('.popup-wrapper').hide();
    });

    $('.popup2Open').click(function(e) {
        e.preventDefault();
        $('.popup-2').show();
    });

    $('.popup1Open').click(function (e) {
        e.preventDefault();
        $('.popup-1').show();
    });





}(jQuery));