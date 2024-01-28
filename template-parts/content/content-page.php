<?php

if(get_row_layout() === 'content_division') :
    get_template_part('template-parts/divisions/mobile-division');
endif;

if(get_row_layout() === 'mobile_division') :
    get_template_part('template-parts/divisions/mobile-division');
endif;

if(get_row_layout() === 'anchor') :
    get_template_part('template-parts/anchors/anchor');
endif;

if(get_row_layout() === 'flexible_columns') :
    get_template_part('template-parts/flexible-columns/columns/flexible-column');
endif;

if(get_row_layout() === 'home_banner') :
    get_template_part('template-parts/banners/home-banner');
endif;

if(get_row_layout() === 'tertiary_banner') :
    get_template_part('template-parts/full-width/tertiary-banner');
endif;


if(get_row_layout() === 'contact_bar') :
    get_template_part('template-parts/full-width/contact-bar');
endif;

if(get_row_layout() === 'footer_banner') :
    get_template_part('template-parts/full-width/footer-banner');
endif;

if(get_row_layout() === 'instagram') :
    get_template_part('template-parts/full-width/instagram');
endif;

if(get_row_layout() === 'hero_image') :
    get_template_part('template-parts/full-width/hero-image');
endif;

if(get_row_layout() === 'inline_timeline') :
    get_template_part('template-parts/inline/inline-timeline');
endif;

if(get_row_layout() === 'inline_icon_row') :
    get_template_part('template-parts/inline/inline-icon-row');
endif;

if(get_row_layout() === 'case_study_cards') :
    get_template_part('template-parts/inline/cards-case-study');
endif;
