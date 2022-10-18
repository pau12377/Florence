$(".navigation").click(() => {
  $(".navigation, .menu__background").toggleClass("open");
});

const mySwiper = new Swiper(".swiper", {
  //オプション
  effect: "fade",
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  loop: true,
  speed: 1000,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
});
