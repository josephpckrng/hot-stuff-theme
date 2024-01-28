document.addEventListener('DOMContentLoaded', function () {
    var controller = new ScrollMagic.Controller();

    var rotationTween = gsap.to('.spin', { rotation: 360, ease: 'none' });

    var scene = new ScrollMagic.Scene({
        triggerElement: 'body',
        duration: '200%', // Adjust the duration as needed
        triggerHook: 0,
    })
    .setTween(rotationTween)
    .addTo(controller)
    .on('update', function (event) {
        var progress = event.progress;
        rotationTween.progress(progress);
    });
});

jQuery(document).ready(function($) {
    // Check if WooCommerce gallery exists
    var $gallery = $('.woocommerce-product-gallery');
    if ($gallery.length > 0) {
        // Create Swiper structure
        $gallery.addClass('swiper mySwiper');
        $gallery.find('.woocommerce-product-gallery__image').wrap('<div class="swiper-slide"></div>');
        $gallery.wrapInner('<div class="swiper-wrapper"></div>');

        // Optionally add pagination, navigation, etc.
        // For example, pagination:
        $gallery.append('<div class="swiper-pagination"></div>');

        // Initialize Swiper
        var mySwiper = new Swiper('.mySwiper', {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
        });
    }
});