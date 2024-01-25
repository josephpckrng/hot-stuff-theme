<section class="inline-icon-row inline icon-row-desktop position-relative">
    <div class="content d-flex custom-content">
        <?php $count = 0 ?>
        <?php
        if (have_rows('icons')):
            while (have_rows('icons')): the_row(); ?>
        <a href="<?= get_sub_field('link')?>" style="position: relative;z-index: 1001; height: fit-content;">
                <div class="icon-wrapper" style="margin-top: <?= get_sub_field('height_adjust') ?>em">
                    <img class="image<?= $count++ ?>" src="<?= get_sub_field('icon') ?>">
                </div>
        </a>
            <?php endwhile; endif; ?>
    </div>
</section>
<section class="inline-icon-row inline icon-row-mobile swiper-container-icon position-relative">
    <div class="content d-flex custom-content swiper-wrapper">
        <?php $count = 0 ?>
        <?php
        if (have_rows('icons')):
            while (have_rows('icons')): the_row(); ?>
                <a href="<?= get_sub_field('link')?>" class="swiper-slide" style="position: relative;z-index: 9999">
                    <div class="icon-wrapper">
                        <img class="image<?= $count++ ?>" src="<?= get_sub_field('icon') ?>">
                    </div>
                </a>

            <?php endwhile; endif; ?>
    </div>
</section>