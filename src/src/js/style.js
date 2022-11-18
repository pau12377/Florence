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

//固定ヘッダー時アンカーリンクの位置を調整
$(function () {
  let headerHight = 130;
  $('a[href^="#"]').click(function () {
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top - headerHight;
    $("html, body").animate({ scrollTop: position }, 550, "swing");
    return false;
  });
});
