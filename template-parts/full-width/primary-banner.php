<section class="banner">
    <div class="content d-flex h-100">
        <div class="swiper swiper-left" id="text-swiper">
            <div class="swiper-wrapper" style="flex-direction: column;">
                <?php if (have_rows('slides')):
                    while (have_rows('slides')):
                        the_row();

                        $title = get_sub_field('title');
                        $body = get_sub_field('text');
                        $link = get_sub_field('link');
                        $image = get_sub_field('image');
                        $cost = get_sub_field('cost');
                        $features = get_sub_field('features');
                        $productType = get_sub_field('product_type');
                        $backgroundImage = get_sub_field('background_image');
                        ?>

                        <div class="swiper-slide">
                            <div class="text-group">
                                <div class="product-type">
                                    <h3>
                                        <?= $productType ?>
                                    </h3>
                                </div>
                                <div class="title">
                                    <h1>
                                        <?= $title ?>
                                    </h1>
                                </div>
                                <div class="body-text">
                                    <?= $body ?>
                                    <h4>Cost:</h4><?= $cost ?>
                                    <h4>Features:</h4><?= $features ?>
                                </div>
                                <div class="button">
                                    <?php
                                    if ($link):
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="button" href="<?php echo esc_url($link_url); ?>"
                                            target="<?php echo esc_attr($link_target); ?>">
                                            <?php echo esc_html($link_title); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
            </div>

            <!-- Pagination -->
        </div>

        <div class="cards w-50">
            <div class="swiper mySwiper" id="image-swiper">
                <div class="swiper-wrapper">
                    <?php if (have_rows('slides')):
                        while (have_rows('slides')):
                            the_row();
                            $image = get_sub_field('image');
                            ?>
                            <div class="swiper-slide" style="background-image: url(<?= esc_url($image['url']); ?>)">
                                <!-- No need for a title here -->
                            </div>
                        <?php endwhile; endif; ?>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination" id="image-pagination"></div>
            </div>
        </div>
    </div>
</section>