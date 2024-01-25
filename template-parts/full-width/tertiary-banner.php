<section id="section-1">
    <div class="content-slider">
        <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
        <input type="radio" id="banner2" class="sec-1-input" name="banner">
        <input type="radio" id="banner3" class="sec-1-input" name="banner">
        <input type="radio" id="banner4" class="sec-1-input" name="banner">
        <div class="slider">
            <div id="top-banner-1" class="banner">
                <div class="banner-inner-wrapper"
                     style="background-image:url(<?= get_sub_field('background_image') ?>)">
                    <h2><?= get_sub_field('top_title_1') ?></h2>
                    <h1><?= get_sub_field('bottom_title_1') ?></h1>
                    <div class="line"></div>
                    <div class="learn-more-button"><?php if (get_sub_field('link')) : ?>
                            <div class="link">
                                <?php $button = get_sub_field('link'); ?>
                                <a href="<?= $button['url'] ?>" class="btn btn-link" role="button"
                                   target="<?= $button['target'] ?>"><?= $button['title'] ?>

                                </a>
                            </div>
                        <?php endif; ?></div>
                </div>
            </div>
            <div id="top-banner-2" class="banner">
                <div class="banner-inner-wrapper"
                     style="background-image:url(<?= get_sub_field('background_image_2') ?>)">
                    <h2><?= get_sub_field('top_title_2') ?></h2>
                    <h1><?= get_sub_field('bottom_title_2') ?></h1>
                    <div class="line"></div>
                    <div class="learn-more-button"><?php if (get_sub_field('link2')) : ?>
                            <div class="link">
                                <?php $button = get_sub_field('link2'); ?>
                                <a href="<?= $button['url'] ?>" class="btn btn-link" role="button"
                                   target="<?= $button['target'] ?>"><?= $button['title'] ?>

                                </a>
                            </div>
                        <?php endif; ?></div>
                </div>
            </div>
            <div id="top-banner-3" class="banner">
                <div class="banner-inner-wrapper"
                     style="background-image:url(<?= get_sub_field('background_image_3') ?>)">
                    <h2><?= get_sub_field('top_title_3') ?></h2>
                    <h1><?= get_sub_field('bottom_title_3') ?></h1>
                    <div class="line"></div>
                    <div class="learn-more-button"><?php if (get_sub_field('link3')) : ?>
                            <div class="link">
                                <?php $button = get_sub_field('link3'); ?>
                                <a href="<?= $button['url'] ?>" class="btn btn-link" role="button"
                                   target="<?= $button['target'] ?>"><?= $button['title'] ?>

                                </a>
                            </div>
                        <?php endif; ?></div>
                </div>
            </div>
            <div id="top-banner-4" class="banner">
                <div class="banner-inner-wrapper"
                     style="background-image:url(<?= get_sub_field('background_image_4') ?>)">
                    <h2><?= get_sub_field('top_title_4') ?></h2>
                    <h1><?= get_sub_field('bottom_title_4') ?></h1>
                    <div class="line"></div>
                    <div class="learn-more-button"><?php if (get_sub_field('link4')) : ?>
                            <div class="link">
                                <?php $button = get_sub_field('link4'); ?>
                                <a href="<?= $button['url'] ?>" class="btn btn-link" role="button"
                                   target="<?= $button['target'] ?>"><?= $button['title'] ?>

                                </a>
                            </div>
                        <?php endif; ?></div>
                </div>
            </div>
        </div>
        <nav>
            <div class="controls">
                <label for="banner1"><span class="progressbar"><span
                                class="progressbar-fill"></span></span><span>01</span> Compact</label>
                <label for="banner2"><span class="progressbar"><span
                                class="progressbar-fill"></span></span><span>02</span> SLR</label>
                <label for="banner3"><span class="progressbar"><span
                                class="progressbar-fill"></span></span><span>03</span> Polaroid</label>
                <label for="banner4"><span class="progressbar"><span
                                class="progressbar-fill"></span></span><span>04</span> Rangefinder</label>
            </div>
        </nav>
    </div>
</section>

<section class="full-width primary-banner mobile w-100" style="min-height: 100vh;">
    <video
            autoplay=""
            muted=""
            loop=""
            playsinline=""
            src="https://analoguerevival.co.uk/wp-content/uploads/2022/08/Videoleap-6DBB4AAF-C162-4F57-AE64-A5429B6EE5FF.mov"
            style="position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;">
    </video>
    <div class="background-image-container">
        <div class="text-content-wrapper">
            <div class="text-content">
                <?= get_sub_field('text_content'); ?>
            </div>
            <div class="link-content d-flex">
                <?php if (get_sub_field('link')) : ?>
                    <div class="link">
                        <?php $button = get_sub_field('link'); ?>
                        <a href="<?= $button['url'] ?>" class="link1" role="button"
                           target="<?= $button['target'] ?>">Compact

                        </a>
                    </div>
                <?php endif; ?>
                <?php if (get_sub_field('link2')) : ?>
                    <div class="link">
                        <?php $button = get_sub_field('link2'); ?>
                        <a href="<?= $button['url'] ?>" class="link1" role="button"
                           target="<?= $button['target'] ?>">SLR

                        </a>
                    </div>
                <?php endif; ?>
                <?php if (get_sub_field('link3')) : ?>
                    <div class="link">
                        <?php $button = get_sub_field('link3'); ?>
                        <a href="<?= $button['url'] ?>" class="link1" role="button"
                           target="<?= $button['target'] ?>">Polaroid

                        </a>
                    </div>
                <?php endif; ?>
                <?php if (get_sub_field('link4')) : ?>
                    <div class="link">
                        <?php $button = get_sub_field('link4'); ?>
                        <a href="<?= $button['url'] ?>" class="link1" role="button"
                           target="<?= $button['target'] ?>">Rangefinder

                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <a class="arrow-wrapper" href="#first">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </div>
</section>

<script>


    ///// Section-1 CSS-Slider /////
    // Auto Switching Images for CSS-Slider
    function bannerSwitcher() {
        next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
        if (next.length) next.prop('checked', true);
        else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function () {
        clearInterval(bannerTimer);
        bannerTimer = setInterval(bannerSwitcher, 5000)
    });


    ///// Anchor Smooth Scroll /////
    //   $('.main-menu a, .learn-more-button a').click(function(e){

    //     e.preventDefault();

    //     var target = $(this).attr('href');

    //     $('html, body').animate({scrollTop: $(target).offset().top}, 1000);
    //     return false;
    //   });


</script>

