jQuery(document).ready(function ($) {
    const header = $('.clubs-header');
    const nav = header.children('nav');
    const title = header.find('h1');

    const activate = () => {
        title.slideUp();
        header.addClass('drop-shadow-sm');
        nav.addClass('bg-neutral-800');
    };

    const off = () => {
        title.slideDown();
        header.removeClass('drop-shadow-sm');
        nav.removeClass('bg-neutral-800');
    };

    $(document).on('scroll', function () {
        if ($(document).scrollTop()) {
            activate();
        } else {
            off();
        }
    });
});
