<footer>
   
</footer>

<?php wp_footer(); ?>

<script>

jQuery(document).ready(function($) {
    // Check if WooCommerce gallery exists
    var $gallery = $('.woocommerce-product-gallery__wrapper');
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
            loop: true,
            // other options
        });
    }
});
</script>
</body>
</html>