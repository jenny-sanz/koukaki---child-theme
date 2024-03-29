
const swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",

    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },

    initialSlide: 4,
    spaceBetween: 50,

    loop: true,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
      },
    loopedSlides: 2,
  });



