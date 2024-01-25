<?php


/**
 * Theme Options
 */
add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');
/**
 * Register and Enqueue Styles.
 */
add_action('wp_enqueue_scripts', 'enqueue_style_scripts');
function enqueue_style_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), array(), false);
    wp_enqueue_script('rn-swiper-js', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.js', array(), array(), false);
    wp_enqueue_style('rn-swiper-css', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.css', array(), array(), false);

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array(), array(), false);
    wp_enqueue_style(
        'bootstrap-styles',
        get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css'
    );
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), array(), false);
    wp_enqueue_style('style', get_stylesheet_uri());
}



if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

