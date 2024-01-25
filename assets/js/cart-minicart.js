$(document).ready(function() {

    // Desktop Mini Cart

    function closeMobileMenu() {
        let mobileMenu = $('#menu-mobile-wrapper');
        let mobileMenuToggler = $('#mobile-menu-toggler');
        let mobileMenuTogglerIcon = mobileMenuToggler.find('i');
        // mobileMenu.slideUp();
        // mobileMenu.removeClass('active');
        mobileMenuTogglerIcon.removeClass('fa-times').addClass('fa-bars');
        mobileMenu.find('ul#menu-mobile').find('> li > ul.children').css('visibility','hidden');
    }

    $('.header-details').find('.cart-total i').removeClass('fa-chevron-down').addClass('fa-chevron-up');



    $(document).on('click', '.mini-cart-toggle', function() {
        $('.mini-cart-content-wrapper').toggleClass('d-block');

    })




    $(document).on('click', 'header .mini-cart-toggle', function() {
        closeMobileMenu();
        if( $('body').hasClass('woocommerce-cart') == false && $('body').hasClass('woocommerce-checkout') == false ) {
            $('header').find('.cart-total i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            // $('.mini-cart-content-wrapper').slideDown();
        }
    })

    let inputMinusValNew = '';
    $(document).on('click', '.item-details-quantity .qty-minus', function() {
        let inputQty = $(this).parent('.item-details-quantity').find('.qty');
        let inputVal = inputQty.val();
        inputMinusValNew = --inputVal;
        if (inputMinusValNew !== 0) {
            inputQty.val(inputMinusValNew);
        }
        inputQty.change();
    })

    let inputPlusValNew = '';
    $(document).on('click', '.item-details-quantity .qty-plus', function() {
        let inputQty = $(this).parent('.item-details-quantity').find('.qty');
        let inputVal = inputQty.val();
        inputPlusValNew = 0;
        inputPlusValNew = ++inputVal;
        let inputStockQty = $(this).parent('.item-details-quantity').data('stock-qty');

        if (inputStockQty.length == 0) {
            inputQty.val(inputPlusValNew);
            inputQty.change();
        } else {
            if (inputPlusValNew <= inputStockQty) {
                inputQty.val(inputPlusValNew);
                inputQty.change();
            }
        }
    })

    $(document).on('change', '.qty', function() {
        $('.submit-button').slideDown();
    })

    // $(document).on('click', function (e) {
    //     if ($(e.target).closest('.option-minicart').length === 0) {
    //         $('.mini-cart-content-wrapper').slideUp();
    //     }
    // });

})

jQuery(document).on('submit', '.shop_table.cart form', function() {
    updateMiniCartQuantity();
    return false;
});

function updateMiniCartQuantity() {
    var cartForm = jQuery('.shop_table.cart form');
    jQuery('<input />').attr('type', 'hidden')
        .attr('name', 'update_cart')
        .attr('value', 'Update cart')
        .appendTo(cartForm);

    var formData = cartForm.serialize();
    jQuery.ajax({
        type: cartForm.attr('method'),
        url: cartForm.attr('action'),
        data: formData,
        dataType: 'html',
        success: function(response) {

            jQuery.ajax({
                url : ajax_url.ajaxurl,
                type : 'post',
                dataType : 'html',
                data : {
                    action : 'ajax_minicart_total',
                },
                success : function( html ) {
                    let miniCartTotal = $('.mini-cart-container .cart-total-amount');
                    miniCartTotal.empty();
                    miniCartTotal.html(html);
                    $('.submit-button').slideUp();
                }
            });

        }
    });
}

// Changing quantity on Cart Page

$(document).ready(function() {

    let inputMinusValNew = '';
    $(document).on('click', '.item-quantity-price .qty-minus', function() {
        let inputQty = $(this).parent('.item-quantity').find('.qty');
        let inputVal = inputQty.val();
        inputMinusValNew = --inputVal;
        if (inputMinusValNew !== 0) {
            inputQty.val(inputMinusValNew);
        }
        inputQty.change();
    })

    let inputPlusValNew = '';
    $(document).on('click', '.item-quantity-price .qty-plus', function() {

        let inputQty = $(this).parent('.item-quantity').find('.qty');
        let inputVal = inputQty.val();
        inputPlusValNew = 0;
        inputPlusValNew = ++inputVal;
        let inputStockQty = $(this).parent('.item-quantity').data('stock-qty');

        if (inputStockQty.length == 0) {
            inputQty.val(inputPlusValNew);
            inputQty.change();
        } else {
            if (inputPlusValNew <= inputStockQty) {
                inputQty.val(inputPlusValNew);
                inputQty.change();
            }
        }
    })

});

// Enabling the Update basket button on quantity change

$(document).on('change','.item-quantity-price .qty', function() {
    $('.btn-update-cart').removeAttr('disabled');
})

// Trigger Save/Share Quote

$(document).on('click', '.btn-cart-quote', function(e) {
    e.preventDefault();
    $('.wsc_share_cart').click();
});

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
})