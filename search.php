<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main search-wrap content" style="padding: 0 10%">
            <h2 class="pagetitle w-100" style="font-weight:bold; margin: 2rem 0;">Search Result for: <?php /* Search Count */
                $allsearch = new WP_Query("s=$s&showposts=-1");
                $key = wp_specialchars($s, 1);
                $count = $allsearch->post_count;
                _e('');
                _e('<span class="search-terms" style="font-size: inherit;">');
                echo $key;
                _e('</span>');
                wp_reset_query(); ?></h2>
            <?php if (have_posts()) : ?>
                <?php
                // Start the Loop.
                while (have_posts()) :
                    the_post(); ?>
                    <div class="col-xl-12">
                        <a href="<?php the_permalink($post->ID); ?>" style="text-decoration: none">
                            <div class="post-body-wrapper" style="margin-bottom: 1rem;">
                                <div class="post-page-header">
                                    <div class="text-search-content">
                                        <?php echo get_the_title($post->ID); ?>
                                        <div class="post-body" style="font-weight: normal">
                                            <?php
                                            $content = $post->post_content;
                                            echo wp_trim_words($content, 30, '...');
                                            ?>
                                        </div>
                                        <div class="view-link">
                                            <?php echo 'View '; $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->labels->singular_name ; ?>
                                        </div>

                                    </div>


                                    <div class="image-featured">
                                        <?= get_the_post_thumbnail();?>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile;

            else :
                echo '<div class="nout-ere">' . "There appears to be nothing here?" . '</div>';

            endif;
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
