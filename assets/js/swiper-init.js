
$(document).ready(function () {


    var swiper = new Swiper(".swipe-init", {
        loop: true,
        spaceBetween: 0,
        autoplay: {
            delay: 2000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        slidesPerView: 1,
        centeredSlides: true,
    });


    var swiper = new Swiper(".swipe-init-review", {
        loop: true,
        freeMode: true,
        spaceBetween: 30,
        grabCursor: true,
        slidesPerView: 3,
        loop: true,
        autoplay: {
            delay: 1,
            disableOnInteraction: false
        },

        freeMode: true,
        speed: 5000,
        freeModeMomentum: false
    });


    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
        $hamburger.toggleClass("is-active");
        // Do something else, like open/close menu
    });

    var swiper = new Swiper(".swipe-init-mobile", {
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        slidesPerView: 1.3,
        centeredSlides: true,
    });

    var swiper = new Swiper(".swipe-init-mobile-related", {
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        slidesPerView: 4,
        centeredSlides: true,
        breakpoints: {
            // when window width is >= 320px
            300: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            900: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }
    });

    var swiperOptions = {
        loop: true,
        freeMode: true,
        spaceBetween: 30,
        grabCursor: true,
        slidesPerView: 4,
        loop: true,
        autoplay: {
            delay: 1,
            disableOnInteraction: false
        },
        freeMode: true,
        speed: 5000,
        freeModeMomentum: false
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);

    var swiperOptions = {
        loop: true,
        freeMode: true,
        spaceBetween: 30,
        grabCursor: true,
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 1,
            disableOnInteraction: false
        },

        freeMode: true,
        speed: 5000,
        freeModeMomentum: false
    };


    var $burger = $(".burger-menu");
    $hamburger.on("click", function(e) {

        $burger.toggleClass("is-active");
        // Do something else, like open/close menu
    });


    var swiper = new Swiper(".swiper-container-review", swiperOptions);

    var swiperOptions = {
        loop: true,
        freeMode: true,
        spaceBetween: 10,
        grabCursor: true,
        slidesPerView: 1.3,
        loop: true,
        autoplay: {
            delay: 1,
            disableOnInteraction: false
        },

        freeMode: true,
        speed: 5000,
        freeModeMomentum: false
    };

    var swiper = new Swiper(".swiper-container-icon", swiperOptions);

});

