<!-- vars -->
<?php $col = get_sub_field('column_width'); ?>
<section class="flexible-products col-lg-<?= $col ?>">
        <?php
        $stores = get_sub_field('products'); // your Relationship field
        if ($stores) {
            foreach ($stores as $post) {
                $link = get_the_permalink(get_the_ID());
                echo '<a href="' . $link . '" class="card-wrapper">';
                echo get_the_post_thumbnail();
                echo '<div class="product-text-wrapper">';
                $product = new WC_Product($post->ID);
                $title = get_the_title();
                echo '<h3 class="product name">' . wp_trim_words($title, 3, '...') . '</h3>';
                echo '<h5>' . $product->get_price_html() . '</h5>';
                echo '<div class="product-lower-wrapper">';
                echo 'View ';
                $post_type = get_post_type_object(get_post_type($post));
                echo $post_type->labels->singular_name;
                echo '<i class="far fa-arrow-up"></i>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
                wp_reset_postdata();
            }
        }
        ?>
</section>

