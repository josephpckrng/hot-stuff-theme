<footer>
    <div class="content">
        <div class="payment-types-wrapper w-25">
            <div class="payment-types-title">
                <h4>We Accept</h4>
                <div class="card-icons-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/Cardicons.svg" />
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.velocity.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>



<script>
   var textSwiper = new Swiper('#text-swiper', {
        direction: 'vertical',
        // Add your swiper options here
        pagination: {
            el: '#text-pagination',
            clickable: true,
        },
        effect: "fade",
    });

    var imageSwiper = new Swiper('#image-swiper', {
        direction: 'horizontal',
        // Add your swiper options here
        pagination: {
            el: '#image-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"><img src="https://staging2.analoguerevival.co.uk/wp-content/uploads/2024/01/568122.png" alt=""></span>';
            },
        },
        effect: "creative",
        creativeEffect: {
        prev: {
          shadow: true,
          translate: ["-20%", 0, -1],
        },
        next: {
          translate: ["100%", 0, 0],
        },
      },
    });

    // Synchronize the two swipers
    imageSwiper.on('slideChange', function () {
        var activeIndex = imageSwiper.activeIndex;
        textSwiper.slideTo(activeIndex);
    });

    textSwiper.on('slideChange', function () {
        var activeIndex = textSwiper.activeIndex;
        imageSwiper.slideTo(activeIndex);
    });

    
  // Look for .hamburger
  var hamburger = document.querySelector(".hamburger");
  var menu =document.querySelector(".burger-menu")
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
    menu.classList.toggle("is-active");
    // Do something else, like open/close menu
  });

  </script>


</body>

</html>