<?php
get_header();
?>

    <div class="page-cart-wrapper">
        <div class="fifty-fifty-background" style="background: linear-gradient(to left, #fcf5ee 50%, #f2e4d2 50%);">
            <div class="page-cart">
                <?php
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
    </div>

<?php

get_footer();