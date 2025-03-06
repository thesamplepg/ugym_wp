jQuery(document).ready(function ($) {
    const mainHeaderMenu = $('.main-header_menu');

    $('#mobile-menu_btn').click(() => {
        $('#mobile-menu').fadeToggle(150);
    });

    //Accardion toggle in mobile menu

    $('.parent-menu-item').each(function () {
        $(this).on('click', function () {
            $(this).children('ul').slideToggle(200);
        });
    });
});
