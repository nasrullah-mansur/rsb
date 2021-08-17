$(document).ready(function() {
    "use strict";

    $('.header .mobile-show').on('click', function() {
        $('.header .header-content .menu').addClass('active')
    });

    $('.header .header-content .menu .close').on('click', function() {
        $('.header .header-content .menu').removeClass('active')
    });

    $('.popup-mobile-show').on('click', function(e) {
        e.preventDefault();
        $('.popup-mobile').fadeIn();
        $('.page-overlay').fadeToggle();
    });

    $('.popup-mobile .close').on('click', function() {
        $('.popup-mobile').fadeOut();
        $('.page-overlay').fadeToggle();
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

    $('.full-page-overlay-show').on('click', function() {
        bodyScrollUp();
        $('.full-page-overlay').fadeIn();
    });

    $('.full-page-overlay .close-pop').on('click', function() {
        bodyScrollUp();
        $('.full-page-overlay').fadeOut();
    });

    function bodyScrollUp() {
        $('html, body').animate({
            scrollTop: 0,
        });
    }

});