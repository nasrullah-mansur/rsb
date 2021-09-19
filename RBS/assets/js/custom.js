$(document).ready(function() {
    "use strict";

    $('.header .mobile-show').on('click', function() {
        $('.header .header-content .menu').addClass('active')
    });

    $('.header .header-content .menu .close').on('click', function() {
        $('.header .header-content .menu').removeClass('active')
    });

    $('.popup-mobile-show').on('click', function(e) {
        bodyScrollUp();
        e.preventDefault();
        $('.popup-mobile').fadeIn();
        document.querySelector("body").style.overflowY = 'hidden';
    });

    $('.popup-mobile .close').on('click', function() {
        bodyScrollUp();
        $('.popup-mobile').fadeOut();
        document.querySelector("body").style.overflowY = 'scroll';
    });

    $('.form-popup .close, .form-popup .dismiss').on('click', function(e) {
        e.preventDefault();
        $('.form-popup').fadeOut();
        document.querySelector("body").style.overflowY = 'scroll';
    });

    $('.show-partner-popup').on('click', function(e) {
        e.preventDefault();
        bodyScrollUp();
        $('.partner-popup').fadeIn();
        document.querySelector("body").style.overflowY = 'hidden';
    });

    $('.partner-popup .close').on('click', function() {
        bodyScrollUp();
        $('.partner-popup').fadeOut();
        document.querySelector("body").style.overflowY = 'scroll';
    });

    $('.full-page-overlay-1-show').on('click', function() {
        bodyScrollUp();
        $('.full-page-overlay-1').fadeIn();
        document.querySelector("body").style.overflowY = 'hidden';
    });

    $('.full-page-overlay-1 .close-pop').on('click', function() {
        bodyScrollUp();
        $('.full-page-overlay-1').fadeOut();
        document.querySelector("body").style.overflowY = 'scroll';
    });

    $('.full-page-overlay-2-show').on('click', function() {
        bodyScrollUp();
        $('.full-page-overlay-2').fadeIn();
        document.querySelector("body").style.overflowY = 'hidden';
    });

    $('.full-page-overlay-2 .close-pop').on('click', function() {
        bodyScrollUp();
        $('.full-page-overlay-2').fadeOut();
    });

    function bodyScrollUp() {
        $('html, body').animate({
            scrollTop: 0,
        });
    }


    if($(window).width() < 922) {
        $('.header .header-content .menu ul li').on('click', function() {
            $(this).children('ul').toggle();
        })
    }

});