<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <script type="text/javascript">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
    @stack('title')
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//s.w.org" />
    <script type="text/javascript">
        window._wpemojiSettings = {!! json_encode([
        "baseUrl" => "https://s.w.org/images/core/emoji/2.3/72x72/",
        "ext" => ".png",
        "svgUrl" => "https://s.w.org/images/core/emoji/2.3/svg/",
        "svgExt" => ".svg",
        "source" => array(
            "concatemoji" => asset('avdesign/includes/js/avd-emoji-release.min.js')
        )
    ]) !!};
        !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b!==c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <link rel="stylesheet" id="contact-form-7-css" href="{{asset('avdesign/plugins/contact-form-7/includes/css/styles.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="avd-product-bundle-css" href="{{asset('avdesign/content/plugins/avd-product-bundle/assets/css/frontend.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="avd-variation-swatch-css" href="{{asset('avdesign/content/plugins/avd-variation-swatch/assets/css/frontend.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="ypop_frontend-css" href="{{asset('avdesign/content/plugins/yith-avd-popup/assets/css/frontend.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="avd-prettyPhoto-css" href="{{asset('avdesign/content/plugins/prettyPhoto/css/prettyPhoto.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="jquery-selectBox-css" href="{{asset('avdesign/content/plugins/yith-avd-wishlist/assets/css/jquery.selectBox.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="yith-avd-wishlist-css" href="{{asset('avdesign/content/plugins/yith-avd-wishlist/assets/css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="white-theme-style-css" href="{{asset('avdesign/content/themes/white/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="slick-css" href="{{asset('avdesign/content/themes/white/assets/vendors/slick/slick.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="white-animated-css" href="{{asset('avdesign/content/themes/white/assets/css/animate.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" id="yit-icon-retinaicon-font-css" href="{{asset('avdesign/content/plugins/yith-avd-popup/assets/fonts/retinaicon-font/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="font-google-css" href="https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600%2C700%7CLibre+Baskerville%3A400italic&#038;subset=latin%2Clatin-ext&#038;ver=4.8.3" type="text/css" media="all" />
    <link rel="stylesheet" id="font-fontawesome-css" href="{{asset('avdesign/content/themes/white/assets/vendors/font-awesome/css/font-awesome.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="font-stroke-css" href="{{asset('avdesign/content/themes/white/assets/vendors/font-stroke/css/font-stroke.min.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" id="white-child-css" href="{{asset('avdesign/content/themes/white-child/child.css')}}" type="text/css" media="all" />

    <link rel='stylesheet' id='ypop_theme1-css' href='http://janstudio.net/claue/demo/wp-content/plugins/yith-woocommerce-popup/templates/themes/theme1/css/style.css?ver=4.8.3' type='text/css' media='all' />

    @stack('stylesheet')
<!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="{{asset('avdesign/content/plugins/js_composer/assets/css/vc_lte_ie9.min.css')}}" media="screen"/>
    <![endif]-->
    <link rel="stylesheet" id="js_composer_front-css" href="{{asset('avdesign/content/plugins/js_composer/assets/css/js_composer.min.css')}}" type="text/css" media="all" />

    <script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">
            @{{{ data.variation.variation_description }}}
        </div>

        <div class="woocommerce-variation-price">
            @{{{ data.variation.price_html }}}
        </div>

        <div class="woocommerce-variation-availability">
            @{{{ data.variation.availability_html }}}
        </div>
    </script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Desculpe, este produto não está disponível. Escolha uma combinação diferente.</p>
    </script>
    <script type="text/javascript" src="{{asset('avdesign/includes/js/jquery/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('avdesign/includes/js/jquery/jquery-migrate.min.js')}}"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/claue\/demo\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/claue\/demo\/home-6\/?removed_item=1&wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "http:\/\/janstudio.net\/claue\/demo\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>

    <script type="text/javascript" src="{{asset('avdesign/content/plugins/cart/assets/js/frontend/add-to-cart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('avdesign/content/plugins/js_composer/assets/js/vendors/avd-add-to-cart.js')}}"></script>
    <script type="text/javascript" src="{{asset('avdesign/content/plugins/yith-avd-popup/assets/js/jquery.cookie.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('avdesign/content/plugins/yith-avd-popup/assets/js/jquery.yitpopup.min.js')}}"></script>

    @stack('meta')


    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <link rel="icon" href="http://janstudio.net/claue/demo/wp-content/uploads/2016/08/cropped-favicon-1-32x32.png" sizes="32x32" />
    <link rel="icon" href="http://janstudio.net/claue/demo/wp-content/uploads/2016/08/cropped-favicon-1-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="http://janstudio.net/claue/demo/wp-content/uploads/2016/08/cropped-favicon-1-180x180.png" />
    <meta name="msapplication-TileImage" content="http://janstudio.net/claue/demo/wp-content/uploads/2016/08/cropped-favicon-1-270x270.png" />

    @stack('styles')
    <noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>

@stack('body')
<div id="jas-wrapper">

    @include('headers.header-2')


    @yield('content')


    @include('footers.footer-3')


</div>
<!-- #jas-wrapper -->
<a id="jas-backtop" class="pf br__50"><span class="tc bgp br__50 db cw"><i class="pr pe-7s-angle-up"></i></span></a>

<script type="text/javascript">
    (function() {
        function addEventListener(element, event, handler) {
            if (element.addEventListener) {
                element.addEventListener(event, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent('on' + event, handler);
            }
        }

        function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "http://" + this.value;
            }
        }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if (urlFields && urlFields.length > 0) {
            for (var j = 0; j < urlFields.length; j++) {
                addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
            }
        } /* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if (testInput.type !== 'date') {

            /* add placeholder & pattern to all date fields */
            var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
            for (var i = 0; i < dateFields.length; i++) {
                if (!dateFields[i].placeholder) {
                    dateFields[i].placeholder = 'YYYY-MM-DD';
                }
                if (!dateFields[i].pattern) {
                    dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }
            }
        }

    })();
</script>
<link rel='stylesheet' id='metaslider-flex-slider-css' href='http://janstudio.net/claue/demo/wp-content/plugins/ml-slider/assets/sliders/flexslider/flexslider.css?ver=3.5.1' type='text/css' media='all' property='stylesheet' />
<link rel='stylesheet' id='metaslider-public-css' href='http://janstudio.net/claue/demo/wp-content/plugins/ml-slider/assets/metaslider/public.css?ver=3.5.1' type='text/css' media='all' property='stylesheet' />
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "http:\/\/janstudio.net\/claue\/demo\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        },
        "recaptcha": {
            "messages": {
                "empty": "Please verify that you are not a robot."
            }
        },
        "cached": "1"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.9'></script>
<script type='text/javascript' src='//janstudio.net/claue/demo/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript' src='//janstudio.net/claue/demo/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/claue\/demo\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/claue\/demo\/home-6\/?removed_item=1&wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='//janstudio.net/claue/demo/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.1.2'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/claue\/demo\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/claue\/demo\/home-6\/?removed_item=1&wc-ajax=%%endpoint%%",
        "fragment_name": "wc_fragments_befafcaded6d69306c62386d6ed33540"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='//janstudio.net/claue/demo/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.1.2'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpa_wcpb = {
        "ajaxurl": "http:\/\/janstudio.net\/claue\/demo\/wp-admin\/admin-ajax.php",
        "_nonce": "895d97847f"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/plugins/wpa-woocommerce-product-bundle/assets/js/wcpb-frontend.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpa_wcvs = {
        "ajaxurl": "http:\/\/janstudio.net\/claue\/demo\/wp-admin\/admin-ajax.php",
        "_nonce": "fc29da4881"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/plugins/wpa-woocommerce-variation-swatch/assets/js/wcvs-frontend.js'></script>
<script type='text/javascript' src='//janstudio.net/claue/demo/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_wcwl_l10n = {
        "ajax_url": "\/claue\/demo\/wp-admin\/admin-ajax.php",
        "redirect_to_cart": "no",
        "multi_wishlist": "",
        "hide_add_button": "1",
        "is_user_logged_in": "",
        "ajax_loader_url": "http:\/\/janstudio.net\/claue\/demo\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif",
        "remove_from_wishlist_after_add_to_cart": "yes",
        "labels": {
            "cookie_disabled": "We are sorry, but this feature is available only if cookies are enabled on your browser.",
            "added_to_cart_message": "<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"
        },
        "actions": {
            "add_to_wishlist_action": "add_to_wishlist",
            "remove_from_wishlist_action": "remove_from_wishlist",
            "move_to_another_wishlist_action": "move_to_another_wishlsit",
            "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=2.1.2'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/themes/claue/assets/vendors/slick/slick.min.js?ver=4.8.3'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/themes/claue/assets/vendors/magnific-popup/jquery.magnific-popup.min.js?ver=4.8.3'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js?ver=5.2.1'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/themes/claue/assets/vendors/scrollreveal/scrollreveal.min.js?ver=4.8.3'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/themes/claue/assets/vendors/jquery-countdown/jquery.countdown.min.js?ver=4.8.3'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/claue\/demo\/wp-admin\/admin-ajax.php"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-includes/js/wp-util.min.js?ver=4.8.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/claue\/demo\/home-6\/?removed_item=1&wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
    };
    /* ]]> */
</script>
<script type='text/javascript' src='//janstudio.net/claue/demo/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=3.1.2'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-includes/js/jquery/ui/menu.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-includes/js/wp-a11y.min.js?ver=4.8.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var uiAutocompleteL10n = {
        "noResults": "No results found.",
        "oneResult": "1 result found. Use up and down arrow keys to navigate.",
        "manyResults": "%d results found. Use up and down arrow keys to navigate.",
        "itemSelected": "Item selected."
    };
    /* ]]> */
</script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var JAS_Data_Js = {
        "load_more": "Load More",
        "no_more_item": "No More Item To Show",
        "days": "days",
        "hrs": "hrs",
        "mins": "mins",
        "secs": "secs",
        "popup_remove": "Removed from the cart",
        "popup_undo": "Undo?",
        "header_sticky": "1",
        "permalink": ""
    };
    /* ]]> */
</script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/themes/claue/assets/js/theme.js?ver=4.8.3'></script>
<script type='text/javascript'>
    var JASAjaxURL = "http://janstudio.net/claue/demo/wp-admin/admin-ajax.php";
    var JASSiteURL = "http://janstudio.net/claue/demo/index.php";
</script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/plugins/claue-addons/assets/js/3rd.js?ver=4.8.3'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-includes/js/wp-embed.min.js?ver=4.8.3'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.2.1'></script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/plugins/ml-slider/assets/sliders/flexslider/jquery.flexslider-min.js?ver=3.5.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var mc4wp_forms_config = [];
    /* ]]> */
</script>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js?ver=4.1.8'></script>
<!--[if lte IE 9]>
<script type='text/javascript' src='http://janstudio.net/claue/demo/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.1.8'></script>
<![endif]-->
<script>
    (function($) {
        "use strict";

        $(document.body).off('wpa_wcvs_update_html').bind('wpa_wcvs_update_html', function(event, data) {
            var productId = data.pid,
                galleries = $('.variations_form').data('galleries'),
                formData = $('.variations_form').data('product_variations'),
                galleryKey = '',
                selectedAttr = {},
                usedImages = [],
                output_gal = [],
                output_thumb = [],
                images;

            // Get selected size and color
            $('#product-' + productId + ' .swatch select').each(function() {
                if ($(this).parent().parent().hasClass('is-color')) {
                    galleryKey = '_product_image_gallery_' + $(this).data('attribute_name').replace('attribute_', '') + '-' + $(this).val();
                }
                selectedAttr[$(this).data('attribute_name').replace('attribute_', '')] = $(this).val();
            });

            if (typeof(galleries[galleryKey]) !== 'undefined' && galleries[galleryKey] !== null) {
                images = galleries[galleryKey];
            } else {
                images = galleries['default_gallery'];
            }

            // Get variation image
            $.each(formData, function(index, variation) {
                if (Object.keys(variation['attributes']).length === Object.keys(selectedAttr).length) {
                    // Flag to check right or wrong variation
                    var chooseThisVariation = true;

                    $.each(selectedAttr, function(attrName, attrValue) {
                        if (variation['attributes']['attribute_' + attrName + ''] !== '' && variation['attributes']['attribute_' + attrName + ''] !== attrValue) {
                            chooseThisVariation = false;
                        }
                    });

                    if (chooseThisVariation) {
                        var image = variation['image'];

                        if ($.inArray(image['thumb_src'], usedImages) === -1) {
                            output_gal += '<div class="p-item woocommerce-product-gallery__image jas-image-zoom">';
                            output_gal += '<a href="' + image['full_src'] + '">';
                            output_gal += '<img width="' + image['src_w'] + '" height="' + image['src_h'] + '" src="' + image['src'] + '" class="attachment-shop_single size-shop_single" alt="" title="" data-src="' + image['full_src'] + '" data-large_image="' + image['full_src'] + '" data-large_image_width="' + image['full_src_w'] + '" data-large_image_height="' + image['full_src_h'] + '" />';
                            output_gal += '</a></div>';

                            output_thumb += '<div>';
                            output_thumb += '<img src="' + image['thumb_src'] + '" />';
                            output_thumb += '</div>';

                            usedImages.push(image['thumb_src']);
                            return true;
                        }
                    }
                }
            });

            // Get image gallery
            $.each(images, function(index, image) {
                if (image['single'] == undefined) {
                    var img_single = image['thumbnail'];
                } else {
                    var img_single = image['single'];
                }

                if ($.inArray(img_single, usedImages) === -1) {
                    output_gal += '<div class="p-item woocommerce-product-gallery__image jas-image-zoom">';
                    output_gal += '<a href="' + image['data-large_image'] + '">';
                    output_gal += '<img width="' + image['data-large_image_width'] + '" height="' + image['data-large_image_height'] + '" src="' + img_single + '" class="attachment-shop_single size-shop_single" alt="" title="" data-src="' + image['data-src'] + '" data-large_image="' + image['data-large_image'] + '" data-large_image_width="' + image['data-large_image_width'] + '" data-large_image_height="' + image['data-large_image_height'] + '"/>';
                    output_gal += '</a></div>';

                    output_thumb += '<div>';
                    output_thumb += '<img src="' + image['thumbnail'] + '" />';
                    output_thumb += '</div>';

                    usedImages.push(img_single);
                }
            });

            if (window._inQuickview) {
                var output = '<div class="p-thumb images jas-carousel woocommerce-product-gallery" data-slick=\'{"slidesToShow": 1, "slidesToScroll": 1, "fade":true, "dots":true}\'>' + output_gal + '</div>';
            } else {

                var output = '<div class="p-thumb images jas-carousel woocommerce-product-gallery" data-slick=\'{"slidesToShow": 1, "slidesToScroll": 1, "asNavFor": ".p-nav", "fade":true}\'>' + output_gal + '</div>';

            }

            output += '<div class="p-nav oh jas-carousel" data-slick=\'{"slidesToShow": 4,"slidesToScroll": 1,"asNavFor": ".p-thumb","arrows": false, "focusOnSelect": true, "vertical": true, "responsive":[{"breakpoint": 736,"settings":{"slidesToShow": 4, "vertical":false}}]}\'>' + output_thumb + '</div>';

            $('#product-' + productId + ' .single-product-thumbnail').html(output);

            setTimeout(function() {
                $('.jas-carousel').not('.slick-initialized').slick();

                if ($('.jas-image-zoom').length > 0) {
                    $('.jas-image-zoom').zoom({
                        touch: false,
                    });
                }

                // Reset the index of image on product variation
                $('body').on('found_variation', '.variations_form', function(ev, variation) {
                    if (variation && variation.image && variation.image.src && variation.image.src.length > 1) {
                        $('.jas-carousel').slick('slickGoTo', 0);
                    }
                });
            }, 10);

            // Trigger gallery
            if ($('.woocommerce-product-gallery').length > 0 && !window._inQuickview) {
                $('.woocommerce-product-gallery').each(function() {
                    $(this).wc_product_gallery();
                });
                $('body').on('click', '.pswp__container, .pswp__button--close', function() {
                    $('.pswp').removeAttr('class').addClass('pswp');
                });
            }
        });
    })(jQuery);
</script>
@stack('popup')
@stack('scripts')
</body>

</html>
