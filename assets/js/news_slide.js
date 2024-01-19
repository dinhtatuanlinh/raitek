if (window.innerWidth <= 810) {
    let news = document.querySelectorAll("#news .wrapper .item");
    news.forEach((item) => {
      item.classList.add("swiper-slide");
    });
    var swiper = new Swiper("#news-slide", {
      slidesPerView: 1,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  }else {
    let news = document.querySelectorAll("#news .wrapper .item");
    news.forEach((item) => {
      item.classList.add("swiper-slide");
    });
    var swiper = new Swiper("#news-slide", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  }