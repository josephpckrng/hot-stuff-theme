<section class="flexible-columns" style="background-color: <?= the_sub_field('background_colour')?>">
    <div class="flexible-blocks content">
        <div class="row">
            <?php if(have_rows('flexible_columns')) : while(have_rows('flexible_columns')) : the_row();

                get_template_part( 'template-parts/flexible-columns/columns/flexible', 'content' );

            endwhile; endif; ?>
        </div>
    </div>
</section>
