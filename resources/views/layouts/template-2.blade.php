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
@stack('meta')
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
<link rel="stylesheet" id="contact-form-7" href="{{asset('avdesign/plugins/contact-form-7/css/styles.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="product-bundle" href="{{asset('avdesign/plugins/product-bundle/css/frontend.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="variation-swatch" href="{{asset('avdesign/plugins/variation-swatch/css/frontend.css')}}" type="text/css" media="all" />
@stack('stylesheet')
<link rel="stylesheet" id="prettyPhoto" href="{{asset('avdesign/plugins/prettyPhoto/css/prettyPhoto.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="jquery-selectBox" href="{{asset('avdesign/plugins/yith-wishlist/css/jquery.selectBox.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="yith-wishlist" href="{{asset('avdesign/plugins/yith-wishlist/css/style.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="white-theme-style" href="{{asset('avdesign/themes/white/css/style.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="slick" href="{{asset('avdesign/themes/white/slick/slick.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="white-animated" href="{{asset('avdesign/themes/white/css/animate.css')}}" type="text/css" media="all" />

<link rel="stylesheet" id="font-google" href="https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600%2C700%7CLibre+Baskerville%3A400italic&#038;subset=latin%2Clatin-ext&#038;ver=4.8.3" type="text/css" media="all" />
<link rel="stylesheet" id="font-fontawesome" href="{{asset('avdesign/themes/white/font-awesome/css/font-awesome.min.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="font-stroke" href="{{asset('avdesign/themes/white/font-stroke/css/font-stroke.min.css')}}" type="text/css" media="all" />
<!--[if lte IE 9]>
<link rel="stylesheet" type="text/css" href="{{asset('avdesign/plugins/js_composer/css/vc_lte_ie9.min.css')}}" media="screen"/>
<![endif]-->
<link rel="stylesheet" id="js_composer_front" href="{{asset('avdesign/plugins/js_composer/css/js_composer.min.css')}}" type="text/css" media="all" />

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
    var wc_add_to_cart_params = {!! json_encode([
        "ajax_url" => route('cart.add'),
        "wc_ajax_url" => route('cart.add'),
        "i18n_view_cart" => "Ver Carrrinho",
        "cart_url" => route('cart'),
        "is_cart" => "",
        "cart_redirect_after_add" => "no",
        "token" => csrf_token()
    ]) !!};

    /*
    var wc_add_to_cart_params = {
        "ajax_url": "\/claue\/demo\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/claue\/demo\/home-6\/?removed_item=1&wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "http:\/\/janstudio.net\/claue\/demo\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    */
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/cart/js/add-to-cart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/js_composer/js/add-to-cart.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/avd-functions.js')}}"></script>
@stack('scripts-head')
@stack('styles')
<link rel="icon" href="{{asset('avdesign/favicon/cropped-favicon-1-32x32.png')}}" sizes="32x32" />
<link rel="icon" href="{{asset('avdesign/favicon/cropped-favicon-1-192x192.png')}}" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="{{asset('avdesign/favicon/cropped-favicon-1-180x180.png')}}" />
<meta name="msapplication-TileImage" content="{{asset('avdesign/favicon/cropped-favicon-1-270x270.png')}}" />
<noscript>
    <style type="text/css">.wpb_animate_when_almost_visible {opacity: 1;}</style>
</noscript>
</head>
@stack('body')
<div id="jas-wrapper">

    @include('headers.header-3')

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
@stack('popup')
<script type="text/javascript">
    var wpcf7  = {!! json_encode([
            "apiSettings" => array(
                "root" => url("contact-form-7/v1"),
                "namespace" => "form/contact-form-7/v1"
            ),
            "recaptcha" => array(
                "messages" => array(
                    "empty" => "Verifique se você não é um robô."
                ),
                "namespace" => "contact-form-7/v1"
            ),
            "cached" => "1"
        ]) !!};
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/contact-form-7/js/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/jquery-blockui/jquery.blockUI.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/js-cookie/js.cookie.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/frontend/avdesign.min.js')}}"></script>
<script type='text/javascript'>
    var wc_cart_fragments_params = {!! json_encode([
        "ajax_url" => route('cart.fragments'),
        "wc_ajax_url" => route('cart.fragments'),
        "fragment_name" => "wc_fragments_befafcaded6d69306c62386d6ed33540",
        "token" => csrf_token()
    ]) !!};

    /*
    var wc_cart_fragments_params = {
        "ajax_url": "\/claue\/demo\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/claue\/demo\/home-6\/?removed_item=1&wc-ajax=%%endpoint%%",
        "fragment_name": "wc_fragments_befafcaded6d69306c62386d6ed33540"
    };
    */
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/cart/js/cart-fragments.min.js')}}"></script>
<script type='text/javascript'>
    var wpa_wcpb = {
        "ajaxurl": "{{route('product.package')}}",
        "_nonce": "895d97847f"
    };
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/product-bundle/js/frontend.js')}}"></script>
<script type='text/javascript'>
    var wpa_wcvs = {!! json_encode([
        "ajaxurl" => "wpa_wcvs/admin-ajax.php",
        "_nonce" => "fc29da4881"
    ]) !!};
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/variation-swatch/js/frontend.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/prettyPhoto/js/prettyPhoto.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/yith-wishlist/js/jquery.selectBox.min.js')}}"></script>
<script type='text/javascript'>
    var yith_wcwl_l10n = {!! json_encode([
        "ajax_url" => route('wishlist.add'),
        "redirect_to_cart" => "no",
        "multi_wishlist" => "",
        "hide_add_button" => "1",
        "is_user_logged_in" => "",
        "ajax_loader_url" => asset('avdesign/plugins/yith-wishlist/images/ajax-loader.gif'),
        "remove_from_wishlist_after_add_to_cart" => "yes",
        "labels" => array(
            "cookie_disabled" => "Lamentamos, mas esse recurso está disponível somente se os cookies estiverem ativados no seu navegador.",
            "added_to_cart_message" => '<div class="woocommerce-message">Product Produto adicionado ao carrinho</div>'
        ),
        "actions" => array(
            "add_to_wishlist_action" => "add_to_wishlist",
            "remove_from_wishlist_action" => "remove_from_wishlist",
            "move_to_another_wishlist_action" => "move_to_another_wishlsit",
            "reload_wishlist_and_adding_elem_action" => "reload_wishlist_and_adding_elem"
        ),
        "token" => csrf_token()
    ]) !!};
    /*
    var yith_wcwl_l10n = {
        "ajax_url": "aqui",
        "redirect_to_cart": "no",
        "multi_wishlist": "",
        "hide_add_button": "1",
        "is_user_logged_in": "",
        "ajax_loader_url": "{{asset('avdesign/plugins/yith-wishlist/images/ajax-loader.gif')}}",
        "remove_from_wishlist_after_add_to_cart": "yes",
        "labels": {
            "cookie_disabled": "We are sorry, but this feature is available only if cookies are enabled on your browser.",
            "added_to_cart_message": '<div class="woocommerce-message">Produto adicionado ao carrinho</div>'
        },
        "actions": {
            "add_to_wishlist_action": "add_to_wishlist",
            "remove_from_wishlist_action": "remove_from_wishlist",
            "move_to_another_wishlist_action": "move_to_another_wishlsit",
            "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem"
        }
    };
    */
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/yith-wishlist/js/jquery.yith-wcwl.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/themes/white/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/themes/white/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/isotope/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/themes/white/scrollreveal/scrollreveal.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/themes/white/jquery-countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/underscore.min.js')}}"></script>
<script type='text/javascript'>
    var _wpUtilSettings = {!! json_encode([
        "ajax" => array(
            "url" => "wpUtilSettings/admin-ajax.php"
        )
    ]) !!};
</script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/avd-util.min.js')}}"></script>
<script type='text/javascript'>
    var wc_add_to_cart_variation_params = {!! json_encode([
        "wc_ajax_url" => "remover/item/?removed_item=1&wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text" => "Desculpe, nenhum produto corresponde à sua seleção. Escolha uma combinação diferente.",
        "i18n_make_a_selection_text" => "Selecione algumas opções de produtos antes de adicionar este produto a sua ordem.",
        "i18n_unavailable_text" => "Desculpe, este produto não está disponível. Escolha uma combinação diferente."
    ]) !!};
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/cart/js/add-to-cart-variation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/jquery/ui/core.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/jquery/ui/widget.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/jquery/ui/position.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/jquery/ui/menu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/avd-a11y.min.js')}}"></script>
<script type='text/javascript'>
    var uiAutocompleteL10n = {!! json_encode([
        "noResults" => "Nenhum resultado encontrado",
        "oneResult" => "1 resultado encontrado. Use as setas para cima e para baixo para navegar.",
        "manyResults" => "%d resultados encontrados. Use as setas para cima e para baixo para navegar.",
        "itemSelected" => "Item selecionado."
    ]) !!};
</script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/jquery/ui/autocomplete.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/imagesloaded.min.js')}}"></script>
<script type='text/javascript'>
    var JAS_Data_Js = {!! json_encode([
        "load_more" => "Mostre Mais",
        "no_more_item" => "Não há mais itens a mostrar",
        "days" => "dias",
        "hrs" => "hrs",
        "mins" => "mins",
        "secs" => "segs",
        "popup_remove" => "Foi removido ",
        "popup_undo" => "Desfazer?",
        "header_sticky" => "1",
        "permalink" => ""
    ]) !!};
</script>
<script type="text/javascript" src="{{asset('avdesign/themes/white/js/theme.js')}}"></script>

<script type='text/javascript'>
@if($configSite->order == 'cart')
    var JASAjaxURL  = "{{route('cart.add.product')}}";
    var JASSiteURL  = "{{route('cart.add.product')}}";
    var JASPopUpdateURL  = "{{route('cart.update')}}";
@endif
@if($configSite->order == 'wishlist')
var JASAjaxURL  = "{{route('wishlist.add.product')}}";
var JASSiteURL  = "{{route('wishlist.add.product')}}";
var JASPopUpdateURL  = "{{route('wishlist.update')}}";
@endif
var JASSizesURL = "{{route('grids')}}";
    /*
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'httpss://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-895959593', 'auto');
    ga('send', 'pageview');
    */
</script>

<script type="text/javascript" src="{{asset('avdesign/plugins/addons/js/3rd.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/avd-embed.min.js')}}"></script>
<script type='text/javascript'>
    var mc4wp_forms_config = [];
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/mailchimp/js/forms-api.min.js')}}"></script>
<!--[if lte IE 9]>
<script type="text/javascript" src="{{asset('avdesign/plugins/mailchimp/js/third-party/placeholders.min.js')}}"></script>
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
@stack('scripts')
</body>
</html>