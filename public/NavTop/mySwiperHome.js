document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiperHome", {
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },
        autoplay: {
            delay: 3000,
        },
    });
});
