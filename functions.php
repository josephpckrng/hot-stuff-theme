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
    // Deregister and enqueue jQuery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), false, true);

    // Enqueue GSAP and ScrollMagic from node_modules
    wp_enqueue_script('gsap', get_template_directory_uri() . '/node_modules/gsap/dist/gsap.min.js', array(), false, true);
    wp_enqueue_script('scrollmagic', get_template_directory_uri() . '/node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js', array('gsap'), false, true);
    wp_enqueue_script('animation.gsap', get_template_directory_uri() . '/node_modules/scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js', array('gsap', 'scrollmagic'), false, true);


    // Enqueue Bootstrap
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery'), false, true);
    wp_enqueue_style('bootstrap-styles', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css');

 

    // Enqueue your custom scripts
    
    wp_enqueue_script('swiper', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.js', array('jquery'), false, true);
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.css');

    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery', 'scrollmagic'), false, true);
    // Enqueue your main stylesheet
    wp_enqueue_style('style', get_stylesheet_uri());
}




if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

