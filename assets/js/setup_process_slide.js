
if (window.innerWidth <= 810) {
    let partners = document.querySelectorAll("#process .wrapper .item");
    partners.forEach((item) => {
        item.classList.add("swiper-slide");
    });
    var swiper = new Swiper("#setup-process", {
        slidesPerView: 3,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
}