var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  ///////////////////////////
  var swiper = new Swiper(".mySwiper2", {

    autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  slidesPerView: 4,
  spaceBetween: 10,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints:{
    // when window width is >= 640px
    100: {
      slidesPerView: 1,
    },
    500: {
      slidesPerView: 2,
    },

    800: {
      slidesPerView: 3,
    },
    // when window width is >= 768px
    1010: {
      slidesPerView: 4,
    },
    1300: {
      slidesPerView: 5,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});