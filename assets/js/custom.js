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
});