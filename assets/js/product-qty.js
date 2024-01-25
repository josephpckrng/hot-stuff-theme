jQuery(document).ready(function($) {
    // Product Quantity Increaase/Decrease button
    $('body').on('click', '.quantity .qtybtn', function(e) {
        var $button = $(this),
            $input = $button.parent().find( 'input' ),
            oldValue = parseInt( $input.val() ),
            newVal = oldValue,
            step = 1;

        step = parseInt( $input.attr('step') );

        if ( $button.hasClass( 'inc' ) ) {
            var max_val = 9999;

            if ( $input.attr( 'max' ) ) {
                max_val = parseInt( $input.attr( 'max' ) );
            }

            if ( oldValue < max_val ) {
                newVal =  oldValue + step;
            } else {
                newVal = max_val;
            }

        } else if ( $button.hasClass( 'dec' ) ) {
            // Don't allow decrementing below zero
            var min_val = 0;

            if ( $input.attr( 'min' ) ) {
                min_val = parseInt( $input.attr( 'min' ) );
            }

            if ( oldValue > min_val ) {
                newVal = oldValue - step;
            } else {
                newVal = min_val;
            }
        }

        if ( ! $input.attr('disabled') ) {
            $input.val( newVal ).change();
        }
    });



});

