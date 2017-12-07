<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    @stack('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script type="text/javascript">
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>

    <style>
        .wishlist_table .add_to_cart,
        a.add_to_wishlist.button.alt {
            border-radius: 16px;
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
        }
    </style>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />

    <script type="text/javascript">
        window._wpemojiSettings = {!! json_encode([
            "baseUrl" => "https://s.w.org/images/core/emoji/2.3/72x72/",
            "ext" => ".png",
            "svgUrl" => "https://s.w.org/images/core/emoji/2.3/svg/",
            "svgExt" => ".svg",
            "source" => array(
                "concatemoji" => asset('assets/avd-includes/js/avd-emoji-release.min.js')
            )
        ]) !!};
        !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b!==c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <link rel="stylesheet" id="wpa-wcvs-frontend-css" href="{{asset('assets/avd-content/plugins/wpa-avdesign-variation-swatch/assets/css/wcvs-frontend.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="ypop_frontend-css" href="{{asset('assets/avd-content/plugins/yith-avdesign-popup/assets/css/frontend.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="avdesign_prettyPhoto_css-css" href="{{asset('assets/avd-content/plugins/avdesign/assets/css/prettyPhoto.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="jquery-selectBox-css" href="{{asset('assets/avd-content/plugins/yith-avdesign-wishlist/assets/css/jquery.selectBox.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="yith-wcwl-main-css" href="{{asset('assets/avd-content/plugins/yith-avdesign-wishlist/assets/css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="js_composer_front-css" href="{{asset('assets/avd-content/plugins/js_composer/assets/css/js_composer.min.css')}}" type="text/css" media="all" />
    <!-- Themes Deflaut -->
    <link rel="stylesheet" id="jas-avdesign-animated-css" href="{{asset('assets/avd-content/themes/avdesign/assets/css/animate.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="slick-css" href="{{asset('assets/avd-content/themes/avdesign/assets/vendors/slick/slick.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="jas-avdesign-style-css" href="{{asset('assets/avd-content/themes/avdesign/style.css')}}" type="text/css" media="all" />
    <!-- Fonts Deflaut -->
    <link rel="stylesheet" id="font-awesome-css" href="{{asset('assets/fonts/fontawesome/css/font-awesome.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="font-retinaicon-css" href="{{asset('assets/fonts/retinaicon/css/retinaicon-font.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="font-stroke-css" href="{{asset('assets/fonts/fontstroke/css/font-stroke.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="font-google-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CLato%3A400%2C300%2C700%7CLibre+Baskerville%3A400italic&#038;subset=latin%2Clatin-ext&#038;ver=4.8.2" type="text/css" media="all" />    <!-- Adicionais -->
    @stack('stylesheet')

<!-- Scripts -->
    <script type="text/javascript" src="{{asset('assets/avd-includes/js/jquery/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/avd-includes/js/jquery/jquery-migrate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/avd-content/plugins/avdesign/assets/js/frontend/add-to-cart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/avd-content/plugins/js_composer/assets/js/vendors/avdesign-add-to-cart.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/avd-content/plugins/yith-avdesign-popup/assets/js/jquery.cookie.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/avd-content/plugins/yith-avdesign-popup/assets/js/jquery.yitpopup.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/avd-includes/js/functions.js')}}"></script>


    @stack('styles')

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


    <script type="text/javascript">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/gecko\/fashion\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/gecko\/fashion\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "http:\/\/janstudio.net\/gecko\/fashion\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>



    <script>
        var JASAjaxURL = "http://janstudio.net/gecko/fashion/wp-admin/admin-ajax.php";
        var JASSiteURL = "http://janstudio.net/gecko/fashion/index.php";
    </script>

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

    <link rel="icon" href="{{asset('assets/favicon/cropped-icon-150x150.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('assets/favicon/cropped-icon-300x300.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/favicon/cropped-icon-300x300.png')}}" />
    <meta name="msapplication-TileImage" content="{{asset('assets/favicon/cropped-icon-300x300.png')}}" />

    @stack('scripts-head')

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

    @include('headers.header-1')

    @yield('content')

    @include('footers.footer-2')

</div>
<!-- #jas-wrapper -->
<a id="jas-backtop" class="pf br__50">
    <span class="tc bgp br__50 db cw"><i class="pr pe-7s-angle-up"></i></span>
</a>

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

<script type="text/javascript" src="{{asset('assets/avd-content/plugins/avdesign/assets/js/jquery-blockui/jquery.blockUI.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/avdesign/assets/js/js-cookie/js.cookie.min.js')}}"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/gecko\/fashion\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/gecko\/fashion\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/avdesign/assets/js/frontend/avdesign.min.js')}}"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/gecko\/fashion\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/gecko\/fashion\/?wc-ajax=%%endpoint%%",
        "fragment_name": "wc_fragments_37886ca39a5fa19b32492efa60a902fe"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/avdesign/assets/js/frontend/cart-fragments.min.js')}}"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wpa_wcvs = {
        "ajaxurl": "http:\/\/janstudio.net\/gecko\/fashion\/wp-admin\/admin-ajax.php",
        "_nonce": "22b3cc7618"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/wpa-avdesign-variation-swatch/assets/js/wcvs-frontend.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/avdesign/assets/js/prettyPhoto/jquery.prettyPhoto.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/yith-avdesign-wishlist/assets/js/jquery.selectBox.min.js')}}"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var yith_wcwl_l10n = {
        "ajax_url": "\/gecko\/fashion\/wp-admin\/admin-ajax.php",
        "redirect_to_cart": "no",
        "multi_wishlist": "",
        "hide_add_button": "1",
        "is_user_logged_in": "",
        "ajax_loader_url": "http:\/\/janstudio.net\/gecko\/fashion\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif",
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
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/yith-avdesign-wishlist/assets/js/jquery.yith-wcwl.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-content/themes/avdesign/assets/vendors/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-content/themes/avdesign/assets/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-content/themes/avdesign/assets/vendors/scrollreveal/scrollreveal.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-content/themes/avdesign/assets/vendors/jquery-countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-includes/js/underscore.min.js')}}"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/gecko\/fashion\/wp-admin\/admin-ajax.php"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('assets/avd-includes/js/avd-util.min.js')}}"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/gecko\/fashion\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/avdesign/assets/js/frontend/add-to-cart-variation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-includes/js/jquery/ui/core.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-includes/js/jquery/ui/widget.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-includes/js/jquery/ui/position.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-includes/js/jquery/ui/menu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-includes/js/avd-a11y.min.js')}}"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var uiAutocompleteL10n = {
        "noResults": "No results found.",
        "oneResult": "1 result found. Use up and down arrow keys to navigate.",
        "manyResults": "%d results found. Use up and down arrow keys to navigate.",
        "itemSelected": "Item selected."
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('assets/avd-includes/js/jquery/ui/autocomplete.min.js')}}"></script>
<script type="text/javascript">
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
        "live_search": "1",
        "permalink": ""
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('assets/avd-content/themes/avdesign/assets/js/theme.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/jas-addons/assets/js/3rd.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-includes/js/avd-embed.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min.js')}}"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var mc4wp_forms_config = [];
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js')}}"></script>
<!--[if lte IE 9]>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js')}}"></script>
<![endif]-->
<script type="text/javascript">
    /* <![CDATA[ */
    var mailchimp_localization = {
        "url": "http:\/\/janstudio.net\/gecko\/fashion\/wp-admin\/admin-ajax.php",
        "error_message": "Ops! Something went wrong"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/yith-avdesign-popup/assets/js/mailchimp-ajax-subscribe.js')}}"></script>


@stack('popup')


@stack('scripts')

<!-- BEGIN JIVOSITE CODE {literal}
<script type='text/javascript'>
    (function(){ var widget_id = '6nOyPIC5aN';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>

</html>