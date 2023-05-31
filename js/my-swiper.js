//document.addEventListener('DOMContentLoaded', function() {
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

    initialSlide: 2,
    spaceBetween: 50,

    loop: true,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
      },
    loopedSlides: 2,
  });
//});


// const swiper = new Swiper(".mySwiper", {
//     effect: "coverflow",
//     grabCursor: true,
//     centeredSlides: true,
//     slidesPerView: "auto",
//     //lazyLoading: true,
//     loopedSlides: 2,
//     spaceBetween: 30,
    
//     coverflowEffect: {
//       rotate: 50,
//       stretch: 0,
//       depth: 100,
//       modifier: 1,
//       slideShadows: true,
//     },
//     loop: true,
//     autoplay: {
//       delay: 1000,
//       disableOnInteraction: false,
//     },
    
//     initialSlide: 0,
   

//     containerModifierClass: 'swiper-center',
   
//   });