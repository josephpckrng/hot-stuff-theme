<section id="freedom-media-block" class="inline-case-studies inline">
    <div class="content">
        <div class="block-title">
            <?= the_sub_field('block_title') ?>
        </div>
        <div class="row">
            <?php
            $args = [
                'post_type' => 'case_studies',
                'posts_per_page' => '-1',
                'taxonomy' => 'case_studies',
                'cat' => 'case_studies'
            ];

            $query = new WP_Query($args);

            $posts = $query->posts;

            foreach ($posts as $post): ?>
                <div class="col-lg-4 col-sm-12">
                    <a class="img-link-overlay" href="<?php the_permalink() ?>">
                        <div class="thumb-wrapper">
                            <div class="post-upper">
                                <div class="post-thumb">
                                    <div class="thumb-img-top">
                                        <?php echo get_the_post_thumbnail($post->ID); ?>
                                    </div>

                                </div>
                            </div>
                            <div class="thumb-body">
                                <div class="card-title">
                                    <h3><?php the_title() ?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
            <?php

            //                                var_dump($post);
            wp_reset_postdata();
            ?>
        </div>
    </div>


</section>


