<!-- vars -->
<?php
$col = get_sub_field('column_width');
$title = get_sub_field('title');
$body = get_sub_field('text');
?>


<section class="flexible-block col-lg-<?= $col ?>">
    <div class="text">
        <div class="title">
            <h2>
                <?= $title ?>
            </h2>
        </div>
        <div class="body-text">
            <?= $body ?>
        </div>
    </div>
</section>