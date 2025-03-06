jQuery(document).ready(function ($) {
    const slides = $('.welcome-slider_slide');
    const pagination = $('.welcome-slider_pagination span');

    let currentIndex = 0;

    const showSlide = (slide) => {
        $(slide).fadeIn(500);
        $(slide).find('h2').removeClass('animate__fadeOutRight');
        $(slide).find('button').removeClass('animate__fadeOutUp');
        $(slide).find('h2').addClass('animate__fadeInLeft');
        $(slide).find('button').addClass('animate__fadeInUp');
    };

    const hideSlide = (slide) => {
        $(slide).find('h2').removeClass('animate__fadeInLeft');
        $(slide).find('button').removeClass('animate__fadeInUp');
        $(slide).find('h2').addClass('animate__fadeOutRight');
        $(slide).find('button').addClass('animate__fadeOutUp');
        $(slide).fadeOut(500);
    };

    const slideNext = () => {
        hideSlide(slides[currentIndex]);
        currentIndex = currentIndex == slides.length - 1 ? 0 : currentIndex + 1;
        showSlide(slides[currentIndex]);
    };

    const slidePrev = () => {
        hideSlide(slides[currentIndex]);
        currentIndex = currentIndex == 0 ? slides.length : currentIndex - 1;
        showSlide(slides[currentIndex]);
    };

    const resetSlider = () => {
        slides.each(function (index) {
            if (currentIndex == index) return;
            $(this).addClass('hidden');
        });
    };

    const resetPagination = () => {
        pagination.each(function (index) {
            if (currentIndex !== index) {
                $(this).removeClass('opacity-100');
                $(this).addClass('opacity-60');
            } else {
                $(this).addClass('opacity-100');
                $(this).removeClass('opacity-60');
            }
        });
    };

    pagination.each(function (index) {
        $(this).on('click', function () {
            hideSlide(slides[currentIndex]);
            currentIndex = index;
            showSlide(slides[currentIndex]);
            resetPagination();
        });
    });

    resetSlider();
    resetPagination();

    // setInterval(() => {
    //     slideNext();
    //     resetPagination();
    // }, 2000);
});
