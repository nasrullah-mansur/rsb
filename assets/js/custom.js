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
    });

    $('.popup-mobile .close').on('click', function() {
        bodyScrollUp();
        $('.popup-mobile').fadeOut();
    });

    $('.form-popup .close, .form-popup .dismiss').on('click', function(e) {
        e.preventDefault();
        $('.form-popup').fadeOut();
    });

    $('.show-partner-popup').on('click', function(e) {
        e.preventDefault();
        bodyScrollUp();
        $('.partner-popup').fadeIn();
    });

    $('.partner-popup .close').on('click', function() {
        bodyScrollUp();
        $('.partner-popup').fadeOut();
    });

    $('.full-page-overlay-1-show').on('click', function() {
        bodyScrollUp();
        $('.full-page-overlay-1').fadeIn();
    });

    $('.full-page-overlay-1 .close-pop').on('click', function() {
        bodyScrollUp();
        $('.full-page-overlay-1').fadeOut();
    });

    $('.full-page-overlay-2-show').on('click', function() {
        bodyScrollUp();
        $('.full-page-overlay-2').fadeIn();
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

});