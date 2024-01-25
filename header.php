<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css"
        integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body <?php body_class($body_class); ?> data-site-url="<?= site_url(); ?>">


    <?php wp_body_open(); ?>

    <header>
        <div class="content">
            <div class="logo w-25">
                <?php the_custom_logo() ?>
            </div>

            <div href="<?php echo wc_get_cart_url(); ?>" class="basketicon"
                title="<?php _e('View your shopping cart'); ?>">
                <img src="https://staging2.analoguerevival.co.uk/wp-content/uploads/2024/01/568122.png"
                    class="basketicon__icon"></img>
                <div class="basketicon__total">
                    <div class="woocommerce mini-cart">
                        <div class="widget_shopping_cart_content">
                            <?php woocommerce_mini_cart(); ?>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="mobile-menu">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    <div class="burger-menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => "Desktop Menu",
                                'menu_class' => "mobile-menu positioning-class-menu d-flex",
                                'container' => 0,
                                'container_class' => 0,
                            )
                        );
                        ?>
                    </div>

                </div>
        </div>
    </header>