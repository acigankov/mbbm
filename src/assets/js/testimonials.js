const swiper = new Swiper('.testimonials-slider', {
    // Optional parameters
    loop: true,
    speed: 300,
    autoplay: false,
    grabCursor: false,
    //If true, then active slide will be centered, not always on the left side.
    centeredSlides: true,
    centeredSlidesBounds: true,
    slidesPerView: 1,

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is >= 992px
        992: {
            slidesPerView: 3,
        }
      }
});

const video = document.querySelectorAll('.swiper-slide video');
swiper.on('slideChange', function () {
    video.forEach(function(item) {
        item.pause();

    })

});