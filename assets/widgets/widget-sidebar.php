<?php

function eatlean_shop_category_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Shop Category Sidebar', 'Eatlean' ),
            'id' => 'shop-category-sidebar',
            'description' => __( 'Woocommerce Shop Sidebar', 'Eatlean' ),
            'before_widget' => '<div class="woocommerce-category-sidebar widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h6 class="widget-title"><strong>',
            'after_title' => '</strong></h6>',
        )
    );

    register_sidebar( array(
        'name'			=>	__( 'Blog Page Sidebar', 'Eatlean' ),
        'id'			=>	'site-blog',
        'description'	=>	__( 'Widgets in this area will be shown on the Blog Page', 'Eatlean' ),
        'before_widget'	=>	'<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget'	=>	'</div>',
        'before_title'	=>	'<h4 class="widget-title"><span>',
        'after_title'	=>	'</span></h4>'
    ) );

    register_sidebar( array(
        'name'			=>	__( 'Post Page Sidebar', 'bigcart' ),
        'id'			=>	'site-post',
        'description'	=>	__( 'Widgets in this area will be shown on the Single Post Page', 'bigcart' ),
        'before_widget'	=>	'<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget'	=>	'</div>',
        'before_title'	=>	'<h4 class="widget-title"><span>',
        'after_title'	=>	'</span></h4>'
    ) );
}
add_action( 'widgets_init', 'eatlean_shop_category_sidebar' );

function categories_postcount_filter ($variable) {
    $variable = str_replace('(', '<span class="post_count"> ', $variable);
    $variable = str_replace(')', ' </span>', $variable);
    return $variable;
}
add_filter('wp_list_categories','categories_postcount_filter');