<section class="inline-timeline inline">
    <div class="heading-content content">
        <div class="title">
            <h2 class="darkmode-ignore">
                <?= get_sub_field('title') ?>
            </h2>
        </div>
        <div class="body-text">
            <?= get_sub_field('body_content') ?>
        </div>
    </div>
    <section class="timeline">
        <div class="content">
            <?php
            if (have_rows('timeline_items')):
                while (have_rows('timeline_items')): the_row();
                    ?>
                    <?php
                    if (have_rows('left_group')):
                        while (have_rows('left_group')): the_row();
                            ?>
                            <div class="timeline-item">
                                <div class="timeline-img"></div>
                                <div class="timeline-content js--fadeInLeft">
                                    <h2><?= get_sub_field('title') ?></h2>
                                    <div class="body-content">
                                        <?= get_sub_field('body_content') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                    <?php
                    if (have_rows('right_group')):
                        while (have_rows('right_group')): the_row();
                            ?>
                            <div class="timeline-item">
                                <div class="timeline-img"></div>
                                <div class="timeline-content js--fadeInRight">
                                    <h2><?= get_sub_field('title') ?></h2>
                                    <div class="date"><?= get_sub_field('date') ?></div>
                                    <div class="body-content">
                                        <?= get_sub_field('body_content') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                <?php endwhile; endif; ?>
        </div>
    </section>
</section>