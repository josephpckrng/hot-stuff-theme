<?php

add_action('wp_ajax_nopriv_search_products', 'search_products');
add_action('wp_ajax_search_products', 'search_products');
function search_products()
{

    $search = $_POST['search'];

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => '-1',
        'orderby' => 'title',
        'order' => 'ASC',
        's' => $search,
    );

    $query = new WP_Query($args);
    $total = $query->found_posts;

    if ($query->have_posts() && !empty($search)):
        while ($query->have_posts()):
            $query->the_post();
            $decimals = 2;
            $title = get_the_title();
            $img = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $url = get_permalink();
            $product = wc_get_product(get_the_ID());
            $price = $product->get_price($decimals);
            $results['products'][] = array(
                'title' => $title,
                'img' => $img,
                'url' => $url,
                'price' => $price
            );

        endwhile;
    endif;

    wp_reset_query();

    $results['total'] = $total;

    wp_send_json($results);

    wp_die();
}
