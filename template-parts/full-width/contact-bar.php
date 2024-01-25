<section class="full-width contact-bar" style="background-color: <?= get_sub_field('background_colour') ?>;">
    <div class="content">
        <div class="text-content" style="font-weight: <?= get_sub_field('title_weight') ?>; font-size: <?= get_sub_field('title_size')?>rem; color: <?= get_sub_field('title_colour')?>">
            <?= get_sub_field('title') ?>
        </div>
        <div class="form-wrapper">
            <?php echo do_shortcode(get_sub_field('form_shortcode')) ?>
        </div>
    </div>

</section>
