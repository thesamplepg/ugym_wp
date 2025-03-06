jQuery(document).ready(function ($) {
    const coachesSwiper = new Swiper('.coaches-swiper', {
        slidesPerView: 'auto',
        autoplay: {
            delay: 3000,
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    const clubInfoSwiper = new Swiper('.club-info-swiper', {
        slidesPerView: 'auto',
        autoplay: {
            delay: 3000,
        },

        navigation: {
            nextEl: '.club-info-swiper .arrows-right',
            prevEl: '.club-info-swiper .arrows-left',
        },
        pagination: {
            el: '.swiper-pagination',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    const promoSwiper = new Swiper('.promo-swiper', {
        slidesPerView: 'auto',
        autoplay: {
            delay: 6000,
        },
        effect: 'fade',

        navigation: {
            nextEl: '.promo-swiper .arrows-right',
            prevEl: '.promo-swiper .arrows-left',
        },
        // pagination: {
        //     el: '.swiper-pagination',
        // },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    const promoTexts = $('.promo-swiper_text h2');

    const resetPromoTexts = () => {
        promoTexts.each(function (index) {
            const activeText = $(this);
            if (index !== promoSwiper.activeIndex) {
                activeText.removeClass('animate__fadeInLeft');
                activeText.addClass('animate__fadeOutRight');
            } else {
                activeText.addClass('animate__fadeInLeft');
                activeText.removeClass('animate__fadeOutRight');
            }
        });
    };

    resetPromoTexts();

    promoSwiper.on('slideChange', (swiper) => {
        resetPromoTexts();
    });
});
