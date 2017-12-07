function wpa_wcpb_add_to_cart( obj ) {
    if ( obj.hasClass( 'wc-variation-selection-needed' ) ) {
        jQuery('.wpa-error').css('opacity', '1');
        return;
    }
    jQuery('.wpa-error').css('opacity', '0');
    var parent 						= obj.parent(),
        list_product_id 			= '',
        variable 					= obj.attr('variation_id'),
        bundle_variable 			= {};
    bundle_variable_json		= '',
        loader 						= jQuery('.wpa-wcpb-list .loader');
    loader.css('display', 'inline-block');

    jQuery( '.list-select .item', parent ).each(function(){
        var checked = jQuery( 'input[type="checkbox"]:checked', jQuery(this) ).length;
        if ( checked ) {
            list_product_id += jQuery(this).attr('data-product-id') + ',';
        }
    });

    // Get Custom Variable of Bundle
    jQuery('.plt-variations-form').each(function(){
        var bundle_id 				= jQuery(this).data('product_id'),
            bundle_item_vari 		= {},
            check_default 			= jQuery( 'select option:selected', this ).data( 'default' ),
            bundle_price 			= jQuery( 'select option:selected', this ).val(),
            bundle_variation 		= jQuery( 'select option:selected', this ).html();
        if ( check_default != '1' ) {
            bundle_item_vari['price'] = bundle_price;
            bundle_item_vari['variable'] = bundle_variation;
            bundle_variable[bundle_id] = bundle_item_vari;
        }
    });
    bundle_variable_json = JSON.parse(JSON.stringify(bundle_variable));

    if ( list_product_id ) {
        jQuery.ajax( {
            type : "POST",
            headers: { 'X-CSRF-TOKEN': wc_add_to_cart_params.token },
            url  : wpa_wcpb.ajaxurl,
            data : {
                action : 'wpa_wcpb_add_to_cart',
                list_product_id : list_product_id,
                variable: variable,
                bundle_variable: bundle_variable_json,
                _nonce : wpa_wcpb._nonce,
            },
            success : function( response ) {
                wpa_wcpb_toggleClass_loading('done', loader[0]);
                jQuery('.wpa-message').css('opacity', '1');
                // Update mini cart
                if ( jQuery('.widget_shopping_cart_content').length ){
                    jQuery.post(
                        wpa_wcpb.ajaxurl,
                        {'action': 'wpa_wcpb_update_mini_cart'},
                        function(response) {
                            jQuery('.widget_shopping_cart_content').html(response);
                        }
                    );
                }
            }
        } );
    }
}

function wpa_wcpb_toggleClass_loading(toggleClassName, target) {
    var currentClassName = ' '+target.className+' ';
    if(~currentClassName.indexOf(' '+toggleClassName+' ')) {
        target.className = currentClassName.replace(' '+toggleClassName+' ', ' ').trim();
    } else {
        target.className = (currentClassName+' done').trim();
    }
}

function wpa_wcpb_onchange_input_check_total_discount(){
    var total_price = 0,
        wpa_wcpb_list = jQuery('.wpa-wcpb-list'),
        product_bundles = jQuery('.px-product-bundles'),
        input_checked_lenght = jQuery('.px-product-bundles input[type=checkbox]:checked').length,
        product_bundle_data = product_bundles.attr('data-total-discount')
    product_bundle_data_arr = product_bundle_data.split(','),
        bundle_percent = product_bundle_data_arr[input_checked_lenght - 1],
        currencySymbol = '<span class="woocommerce-Price-currencySymbol">' + jQuery('.total.price .current-price span.woocommerce-Price-amount .woocommerce-Price-currencySymbol', wpa_wcpb_list).html() + '</span>';
    if ( ! bundle_percent ) {
        for ( var i = product_bundle_data_arr.length - 1; i >= 0; i-- ) {
            if ( product_bundle_data_arr[i] ) {
                bundle_percent = product_bundle_data_arr[i];
                break;
            }
        };
    }

    jQuery('.px-product-bundles input[type=checkbox]:checked').each(function(){
        var parent = jQuery(this).parent().parent(),
            price = parent.attr('data-item-price'),
            new_price = parseFloat( price ) - parseFloat( price ) * parseFloat( bundle_percent ) / 100;
        jQuery('.price > span.woocommerce-Price-amount', parent).html(
            '<span class="woocommerce-Price-currencySymbol">' + jQuery('.price > span.woocommerce-Price-amount .woocommerce-Price-currencySymbol', parent).html() + '</span>' + new_price.toFixed(2)
        );
        total_price += parseFloat( price );
    });

    jQuery('.total.price .current-price span.woocommerce-Price-amount', wpa_wcpb_list).html(
        currencySymbol + (parseFloat( total_price ) - parseFloat( total_price ) * parseFloat( bundle_percent ) / 100 ).toFixed(2)
    );
    jQuery('.total.price .old-price span.woocommerce-Price-amount', wpa_wcpb_list).html(
        currencySymbol + total_price.toFixed(2)
    );
    jQuery('.total.price .save-price span.woocommerce-Price-amount', wpa_wcpb_list).html(
        currencySymbol + Math.round( parseFloat( total_price ) - ( parseFloat( total_price ) - parseFloat( total_price ) * parseFloat( bundle_percent ) / 100 ) ).toFixed(2)
    );
    jQuery('.total.price .save-percent', wpa_wcpb_list).html(
        bundle_percent
    );
}

function wpa_wcpb_onchange_input_check_discount_per_item(){
    var total_price = 0,
        bundles_price = 0,
        wpa_wcpb_list = jQuery('.wpa-wcpb-list'),
        product_bundles = jQuery('.px-product-bundles'),
        currencySymbol = '<span class="woocommerce-Price-currencySymbol">' + jQuery('.total.price .current-price span.woocommerce-Price-amount .woocommerce-Price-currencySymbol', wpa_wcpb_list).html() + '</span>';

    jQuery('.px-product-bundles input[type=checkbox]:checked').each(function(){
        var parent = jQuery(this).parent().parent(),
            item_price = parent.attr('data-item-price');
        item_percent = ( parent.attr('data-item-percent') ) ? parent.attr('data-item-percent') : 0,
            new_item_price = parseFloat( item_price ) - parseFloat( item_price ) * parseFloat( item_percent ) / 100;
        bundles_price += parseFloat( new_item_price );
        total_price += parseFloat( item_price );
    });

    jQuery('.total.price .current-price span.woocommerce-Price-amount', wpa_wcpb_list).html(
        currencySymbol + bundles_price
    );
    jQuery('.total.price .old-price span.woocommerce-Price-amount', wpa_wcpb_list).html(
        currencySymbol + total_price
    );
    jQuery('.total.price .save-price span.woocommerce-Price-amount', wpa_wcpb_list).html(
        currencySymbol + ( total_price - bundles_price )
    );
    jQuery('.total.price .save-percent', wpa_wcpb_list).html(
        parseFloat( 100 - ( bundles_price / total_price * 100 ) )
    );
}


;(function ( $, window, document, undefined ) {
    "use strict";

    $.PLT = $.PLT || {};

    // ======================================================
    // Main Product Variation Select
    // ------------------------------------------------------
    $.PLT.main_product_variation_select = function () {
        if ( !$( '.variations_form' ).length ) return;
        $( '.variations_form .variations select' ).each(function() {
            $(this).blur(function(){
                if ( $( '.variations_form .single_add_to_cart_button' ).hasClass( 'disabled' ) ) {
                    $( '.wpa_wcpb_add_to_cart' ).addClass( 'wc-variation-selection-needed' );
                    $( '.wpa_wcpb_add_to_cart' ).addClass( 'disabled' );
                }else {
                    $( '.wpa_wcpb_add_to_cart' ).removeClass( 'wc-variation-selection-needed' );
                    $( '.wpa_wcpb_add_to_cart' ).removeClass( 'disabled' );
                }
                var newattr = $(this).attr( 'name' ),
                    newattrval = $(this).val(),
                    variation_id = $( 'input[name="variation_id"], input.variation_id', $( '.variations_form' ) ).val();
                $( '.wpa_wcpb_add_to_cart' ).attr( newattr, newattrval );
                $( '.wpa_wcpb_add_to_cart' ).attr( 'variation_id', variation_id );
            });
        });
    }

    // ======================================================
    // Main Product Variation onload Default
    // ------------------------------------------------------
    $.PLT.main_product_variation_load_default = function () {
        if ( !$( '.variations_form' ).length ) return;
        if ( $( '.variations_form .single_add_to_cart_button' ).hasClass( 'disabled' ) ) {
            $( '.wpa_wcpb_add_to_cart' ).addClass( 'wc-variation-selection-needed' );
            $( '.wpa_wcpb_add_to_cart' ).addClass( 'disabled' );
        }else {
            $( '.wpa_wcpb_add_to_cart' ).removeClass( 'wc-variation-selection-needed' );
            $( '.wpa_wcpb_add_to_cart' ).removeClass( 'disabled' );
        }
        var variation_id = $( 'input[name="variation_id"], input.variation_id', $( '.variations_form' ) ).val();
        $( '.wpa_wcpb_add_to_cart' ).attr( 'variation_id', variation_id );
    }

    // ======================================================
    // Product Bundle Variation Select
    // ------------------------------------------------------
    $.PLT.product_bundle_variation_select = function () {
        if ( !$( '.plt-variations-form select' ).length ) return;
        $( '.plt-variations-form select' ).each(function() {
            $(this).change(function(){
                var parent = $(this).parent().parent(),
                    bundle_price = $(this).val(),
                    wpa_wcpb_list = jQuery('.wpa-wcpb-list'),
                    currencySymbol = '<span class="woocommerce-Price-currencySymbol">' + jQuery('.total.price .current-price span.woocommerce-Price-amount .woocommerce-Price-currencySymbol', wpa_wcpb_list).html() + '</span>';;
                parent.attr('data-item-price', bundle_price);
                $('.info-item .price del .woocommerce-Price-amount', parent).html( currencySymbol + Math.round( parseFloat( bundle_price ) ).toFixed(2) );
                wpa_wcpb_onchange_input_check_total_discount();
            });


        });
    }

    $( document ).ready( function() {
        $(window).load(function() {
            $.PLT.main_product_variation_select();
            $.PLT.main_product_variation_load_default();
            $.PLT.product_bundle_variation_select();
        });
    } );
})( jQuery, window, document );



