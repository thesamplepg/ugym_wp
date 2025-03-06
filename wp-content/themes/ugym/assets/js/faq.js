jQuery(document).ready(function ($) {
    const faq = $('.faq-questions');
    $(faq.children()[0]).children('.faq-answer').slideDown(150);

    const resetAll = () => {
        faq.children().each(function () {
            $(this).children('.faq-answer').slideUp(150);
        });
    };
    faq.children().each(function (index) {
        const answer = $(this).children('.faq-answer');
        $(this).on('click', function () {
            resetAll();
            $(answer).slideToggle(150);
        });
    });
});
