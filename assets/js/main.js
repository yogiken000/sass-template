$(function () {


    JS = {};
    JS.slickSlider = function () {
        const $slider = $('.slider');
        $slider.slick({

        });
    };
    JS.loadAnimation = function () {
        $(window).on('load', function () {
            $('.loaderBox').fadeOut();
        });
    };
    JS.smoothScroll = function () {
        $('a[href^=#]').click(function () {
            var speed = 400; // ミリ秒
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            $('body,html').animate({
                scrollTop: position
            }, speed, 'swing');
            return false;
        });
    };

    JS.header = function () {
        $('.headerNavBtn').on('click', function () {
            $('.header, .headerNavBtn').toggleClass('js-active');
        });
        $('.headerNavList__link').on('click', function () {
            $('.headerNavBtn').trigger('click');
        });


        $(window).on('load scroll', function () {
            var scroll_top = $(window).scrollTop();
            if (scroll_top <= 0) {
                $('.header').addClass('js-noBg');
            } else {
                $('.header').removeClass('js-noBg');
            }
        });

    }

    JS.slickSlider();
    JS.smoothScroll();
    JS.header();
    JS.loadAnimation();

});
