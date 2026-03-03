$(function () {
    var swiperPartner = new Swiper('.swiper.swiperPartner', {
        observer: true,           // Yeh lazmi add karein
        observeParents: true,     // Yeh bhi lazmi add karein
        autoplay: {
            delay: 5000,
        },
        speed: 1000,
        slidesPerView: 6,
        spaceBetween: 20,
        loop: true,
        hasNavigation: true,
        grabCursor: true,
        breakpoints: {
            1025: {
                slidesPerView: 6
            },
            767: {
                slidesPerView: 4
            },
            230: {
                slidesPerView: 3
            }
        },
        pagination: {
            enabled: true,
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
    });
});

$(function () {
    // Testimonial slides count check karein
    var testimonialCount = $('.swiperTestimonial .swiper-slide').length;
    var swiperTestimonial = new Swiper('.swiper.swiperTestimonial', {
        observer: true,           // Yeh lazmi add karein
        observeParents: true,     // Yeh bhi lazmi add karein
        autoplay: {
            delay: 5000,
        },
        speed: 1000,
        loop: true,
        loopedSlides: 3,
        loopAdditionalSlides: 3,
        slidesPerView: 3,
        spaceBetween: 50,
        hasNavigation: true,
        grabCursor: true,
        breakpoints: {
            1025: {
                slidesPerView: 3,
            },
            769: {
                slidesPerView: 2
            },
            319: {
                slidesPerView: 1,
            },
        },
    });
});