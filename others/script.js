;
(function($) {
    "use strict";
    var slider_text = $('.text_slider');

    function text_slider() {
        if (slider_text.length) {
            slider_text.owlCarousel({
                loop: false,
                margin: 0,
                dots: false,
                autoplay: true,
                mouseDrag: true,
                touchDrag: true,
                animateOut: 'slideOutUp',
                animateIn: 'fadeInUp',
                navSpeed: 500,
                items: 1,
                smartSpeed: 2500,
            })
        }
    }
    text_slider();
    var slider_bg = $('.slider_bg');

    function home_slider() {
        if (slider_bg.length) {
            slider_bg.owlCarousel({
                loop: false,
                margin: 0,
                dots: true,
                autoplay: true,
                mouseDrag: true,
                touchDrag: true,
                items: 1,
                smartSpeed: 2500,
            })
        }
    }
    home_slider();
    $('.home_screen_nav .testi_next').on('click', function() {
        slider_text.trigger('next.owl.carousel');
        slider_bg.trigger('next.owl.carousel');
    });
    $('.home_screen_nav .testi_prev').on('click', function() {
        slider_text.trigger('prev.owl.carousel');
        slider_bg.trigger('prev.owl.carousel');
    });
    slider_text.on('translate.owl.carousel', function(property) {
        $('.slider_bg_inner .owl-dots:eq(' + property.page.index + ')').click();
    });
    slider_bg.on('translate.owl.carousel', function(property) {
        $('.text_slider_inner .owl-dots:eq(' + property.page.index + ')').click();
    });
    slider_bg.on('drag.owl.carousel', function() {
        slider_text.trigger('next.owl.carousel');
        slider_bg.trigger('next.owl.carousel');
    });
    slider_text.on('drag.owl.carousel', function() {
        slider_text.trigger('next.owl.carousel');
        slider_bg.trigger('next.owl.carousel');
    });
    var about_slider = $(".about-slider");

    function aboutImage() {
        if (about_slider.length) {
            about_slider.owlCarousel({
                loop: false,
                margin: 0,
                items: 1,
                dots: false,
                autoplay: true,
                mouseDrag: true,
                touchDrag: true,
                slideSpeed: 1500,
                smartSpeed: 1500,
            });
        }
    }
    aboutImage();
    var about_text = $(".text-slider");

    function aboutText() {
        if (about_text.length) {
            about_text.owlCarousel({
                loop: false,
                margin: 0,
                items: 1,
                dots: false,
                autoplay: true,
                mouseDrag: true,
                touchDrag: true,
                slideSpeed: 1500,
                smartSpeed: 1500,
            });
        }
    }
    aboutText();
    $(".slider_nav .testi_next").on("click", function() {
        about_slider.trigger("next.owl.carousel");
        about_text.trigger("next.owl.carousel");
    });
    $(".slider_nav .testi_prev").on("click", function() {
        about_slider.trigger("prev.owl.carousel");
        about_text.trigger("prev.owl.carousel");
    });
    about_text.on('translate.owl.carousel', function(property) {
        $('.about-slider-right .owl-dots:eq(' + property.page.index + ')').click();
    });
    about_slider.on('translate.owl.carousel', function(property) {
        $('.about-slider-left .owl-dots:eq(' + property.page.index + ')').click();
    });
    about_slider.on('drag.owl.carousel', function() {
        about_text.trigger('next.owl.carousel');
        about_slider.trigger('next.owl.carousel');
    });
    about_text.on('drag.owl.carousel', function() {
        about_text.trigger('next.owl.carousel');
        about_slider.trigger('next.owl.carousel');
    });
    var bl_Slider = $(".bl-slider");

    function blSlider() {
        if (bl_Slider.length) {
            bl_Slider.owlCarousel({
                loop: true,
                margin: 0,
                items: 1,
                dots: false,
                autoplay: true,
                mouseDrag: true,
                touchDrag: false,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                smartSpeed: 1500,
            });
        }
    }
    blSlider();
    var contactSlider = $(".contact-slider");

    function contact_Slider() {
        if (contactSlider.length) {
            contactSlider.owlCarousel({
                loop: true,
                margin: 0,
                items: 1,
                dots: true,
                animateOut: 'slideOutRight',
                animateIn: 'fadeInLeft',
                autoplay: true,
                mouseDrag: true,
                touchDrag: false,
                nav: false,
                smartSpeed: 2000,
            });
        }
    }
    contact_Slider();
    var twit_Slider = $(".twitter-slider");

    function twitSlider() {
        if (twit_Slider.length) {
            twit_Slider.owlCarousel({
                loop: true,
                margin: 0,
                items: 1,
                dots: false,
                autoplay: true,
                mouseDrag: true,
                touchDrag: false,
                nav: false,
                smartSpeed: 2000,
            });
        }
    }
    twitSlider();

    function offcanvas_menu() {
        if ($(".nav-button").length) {
            $(".nav-button,.cross").on('click', function() {
                if ($(".offcanvas_menu_click, .nav-button").hasClass('open')) {
                    $(".offcanvas_menu_click, .nav-button, .cross").removeClass('open')
                } else {
                    $(".offcanvas_menu_click, .nav-button").addClass('open')
                }
                return false
            });
        }
    }
    offcanvas_menu();

    function searchFrom() {
        if ($(".search_dropdown").length) {
            $(".search_dropdown").on("click", function() {
                $(".searchForm").toggleClass('show');
                return false
            });
            $(".form_hide").on("click", function() {
                $(".searchForm").removeClass('show')
            });
        };
    };
    searchFrom();
    if ($('.js-ajax-form').length) {
        $('.js-ajax-form').each(function() {
            $(this).validate({
                errorClass: 'error wobble-error',
                submitHandler: function(form) {
                    $.ajax({
                        type: "POST",
                        url: "mail.php",
                        data: $(form).serialize(),
                        success: function() {
                            $('.modal').modal('hide');
                            $('#success').modal('show');
                        },
                        error: function() {
                            $('.modal').modal('hide');
                            $('#error').modal('show');
                        }
                    });
                }
            });
        });
    }
    $(window).on("load", function() {
        $('.loader-container').fadeOut();
        $('.loader').delay(150).fadeOut('slow');
        $('body').delay(150).css({
            'overflow': 'visible'
        })
    });
})(jQuery)