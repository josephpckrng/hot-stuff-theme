<?php

// Divisions

if(get_row_layout() === 'content_division') :
    get_template_part('template-parts/flexible-columns/columns/divisions/content-division');
endif;

// Main content blocks

if(get_row_layout() === 'flexible_block') :
    get_template_part('template-parts/flexible-columns/columns/blocks/flexible-block');
endif;

if(get_row_layout() === 'flexible_images') :
    get_template_part('template-parts/flexible-columns/columns/blocks/flexible-images');
endif;


if(get_row_layout() === 'flexible_products') :
    get_template_part('template-parts/flexible-columns/columns/blocks/flexible-products');
endif;
// Endpoints

if(get_row_layout() === 'flexible_open') :
    get_template_part('template-parts/inline/columns/flexible-endpoints/flexible-open');
endif;

if(get_row_layout() === 'flexible_close') :
    get_template_part('template-parts/inline/columns/flexible-endpoints/flexible-open');
endif;

if(get_row_layout() === 'flexible_reviews') :
    get_template_part('template-parts/flexible-columns/columns/blocks/flexible-reviews');
endif;