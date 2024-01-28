<!-- Vars -->
<?php
$title = get_sub_field('title');
$sTitle = get_sub_field('sub_title');
$link = get_sub_field('link');
?>
<!-- Vars -->

<section class="home-banner">
    <div class="banner-container row">
        <div class="title-wrapper col-lg-12">
            <h1>
                <?php if ($title):
                    echo $title;
                endif; ?>
            </h1>
            <h2>
                <?php if ($sTitle):
                    echo $sTitle;
                endif; ?>
            </h2>
        </div>
        <div class="link-container">
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
</section>