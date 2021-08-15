$(document).ready(function() {
    "use strict";

    $('.header .mobile-show').on('click', function() {
        $('.header .header-content .menu').addClass('active')
    });

    $('.header .header-content .menu .close').on('click', function() {
        $('.header .header-content .menu').removeClass('active')
    });
});