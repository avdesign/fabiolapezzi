@extends('layouts.template-1')

@push('title')
<title> {{config('app.name')}} {{$configKeyword->description}} </title>
<meta name="description" content="{{$configKeyword->description}} , {{$configKeyword->genders}}">
<meta name="keywords" content="{{$configKeyword->keywords}},{{$configKeyword->categories}},{{$configKeyword->genders}}">
@endpush

@push('stylesheet')
<link rel="stylesheet" id="ypop_theme1-css" href="{{asset('assets/avd-content/plugins/yith-avdesign-popup/templates/themes/theme1/css/style.css')}}" type="text/css" media="all" />
@endpush
@push('styles')

<style id='jas-gecko-style-inline-css' type='text/css'>
    .jas-branding{max-width:200px;margin:auto}.header-6 .header__mid,.header-7{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}.header-6 .header__mid:before{content:"";position:absolute;background:rgba(255,255,255,.85);left:0;top:0;width:100%;height:100%;z-index:0}.header-6 .header__mid .jas-branding,.header-7 .jas-branding{position:relative}
    .footer__top,.jas-portfolio .page-head{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}.f__lato,body{font-family:Lato;font-weight:400;font-size:14px;background-color:#fff;color:#999}.f__mont,h1,h2,h3,h4,h5,h6{font-family:Montserrat;font-weight:400}h1{font-size:50px}h2{font-size:30px}h3{font-size:20px}h4{font-size:16px}h5{font-size:14px}h6{font-size:12px}#jas-footer a:hover,#jas-mobile-menu ul>li.current-menu-ancestor>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li:hover>a,.chp:hover,.cp,.header-7 .jas-socials a,.header__top .jas-action a:hover,.inside-thumb a:hover,.jas-blog-slider .post-thumbnail>div a:hover,.jas-filter a.selected,.jas-menu li a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,.p-video a i,.page-head a:hover,.page-numbers li a:hover,.page-numbers.current,.product-button a.button,.product-extra .product-button:not(.flex)>.yith-wcwl-add-to-wishlist .tooltip,.product_meta a:hover,.quantity .qty a:hover,.sidebar .widget a:hover,.vc_tta-tab.vc_active>a,.wc-tabs li.active a,.widget a:hover,.widget ul.product-categories li.current-cat>a,.widget ul.product-categories li:hover>a,.widget ul.product_list_widget li a:hover span.product-title,.widget.widget_price_filter .price_slider_amount,.woocommerce .widget_layered_nav ul li a:hover,.woocommerce .widget_layered_nav ul li span:hover,.woocommerce .widget_layered_nav ul li.chosen a,.woocommerce .widget_layered_nav ul li.chosen span,.woocommerce-MyAccount-navigation ul li.is-active a,.woocommerce-MyAccount-navigation ul li:hover a,.woocommerce-page .widget_layered_nav ul li a:hover,.woocommerce-page .widget_layered_nav ul li span:hover,.woocommerce-page .widget_layered_nav ul li.chosen a,.woocommerce-page .widget_layered_nav ul li.chosen span,a,a.button-o,a:active,a:hover,button.button-o,input.button-o{color:#b59677}#jas-backtop,.btn-atc .yith-wcwl-add-to-wishlist a,.header-7 #jas-mobile-menu ul ul,.header-7 #jas-mobile-menu>ul>li,.header-7 .jas-socials a,.more-link,.p-video a,.product-button a.button,.product-button>*,.single-btn .btn-quickview,a.button-o,a.button-o-w:hover,a.button-o:hover,button.button-o,button.button-o:hover,input.button-o,input.button-o:hover,input:not([type=submit]):not([type=checkbox]):focus,textarea:focus{border-color:#b59677}#jas-backtop span:before,.bghp:hover,.bgp,.btn-atc .yith-wcwl-add-to-wishlist a:hover,.entry-summary .external_single_add_to_cart_button,.entry-summary .single_add_to_cart_button,.jas-ajax-load a.disabled,.jas-ajax-load a:hover,.jas-mini-cart .button.checkout,.jas-service[class*=icon-] .icon:before,.metaslider .flexslider .flex-next,.metaslider .flexslider .flex-prev,.more-link:hover,.product-image:hover .product-button a:hover,.slick-next,.slick-prev,.widget .tagcloud a:hover,.widget.widget_price_filter .ui-slider-range,.widget.widget_price_filter .ui-state-default,.woocommerce-pagination-ajax a.disabled,.woocommerce-pagination-ajax a:hover,.yith-wcwl-add-to-wishlist i.ajax-loading,a.button,a.button-o-w:hover,a.button-o:hover,button,button.button-o:hover,input.button-o:hover,input[type=submit]:not(.button-o){background-color:#b59677}#jas-mobile-menu ul li a,.cd,.holder,.jas-menu>li>a,.jas-mini-cart .mini_cart_item a:nth-child(2),.jas-portfolio-single .portfolio-meta span,.jas-sc-blog .post-info h4 a,.order-total,.order-total td,.page-numbers li,.page-numbers li a,.price,.product-category h3 .count,.product-image .product-attr,.product_meta>span,.shop_table th,.sidebar .widget a,.sidebar .widget ul li:before,.widget a,.widget ul.product-categories li a,.widget ul.product_list_widget li a span.product-title,.widget ul.product_list_widget li ins,.woocommerce-MyAccount-navigation ul li a,.wp-caption-text,h1,h2,h3,h4,h5,h6{color:#4d5959}.error-404.not-found a,.jas-pagination,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-pagination{border-color:#4d5959}#wp-calendar caption,.actions .button.apply-cupon,.actions .button.update-cart,.bgd,.button.continue-button,.error-404.not-found a:hover,.jas-mini-cart .button,.sidebar .widget_shopping_cart .button,.widget .tagcloud a,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-ordering select,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a,mark{background-color:#4d5959}.header-text,.header__top .jas-action a,.jas-socials a{color:#fff}.jas-socials a{border-color:#fff}#jas-mobile-menu ul>li.current-menu-ancestor>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li:hover>a,.jas-menu>li>a{color:#4d5959}.jas-account-menu a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,.jas-menu li>a:hover{color:#b59677}.jas-account-menu ul a,.jas-menu ul a{color:#fff}.jas-menu ul li a:hover{color:#b59677}.jas-account-menu ul,.jas-menu ul{background:#3e3e3e}#jas-footer:before{background:rgba(0,0,0,.95)}#jas-footer,.footer__bot a,.footer__top a{color:#fff}</style><style id="ypop_theme1-inline-css" type="text/css">.ypop-title{font-size:20px;text-transform:uppercase;padding:25px 40px 0}.ypop-checkzone{padding:9px 8px 6px}.ypop-content h3{font-size:18px;line-height:30px}.ypop-wrapper button{width:100%}.ypop-modal .ypop-wrapper a.close{background-color:rgba(255,255,255,.8);background-image:none}.ypop-modal .ypop-wrapper a.close:after{content:'\e680';top:0;right:-2px;position:absolute;font-family:Pe-icon-7-stroke;color:#3e3e3e;font-size:30px;line-height:30px}
</style>
<style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1468435143979{background-position:center;background-repeat:no-repeat!important;background-size:cover!important}.vc_custom_1468435156952{background-position:center;background-repeat:no-repeat!important;background-size:cover!important}.vc_custom_1468435171411{background-position:center;background-repeat:no-repeat!important;background-size:cover!important}.vc_custom_1463247903518{padding-top:120px!important;padding-bottom:120px!important;background-position:center!important;background-repeat:no-repeat!important;background-size:cover!important}.vc_custom_1498380318836{margin-bottom:0px!important;padding-right:0px!important}.vc_custom_1462527331387{padding-top:0px!important;padding-right:0px!important}.vc_custom_1462527341119{padding-top:0px!important;padding-left:0px!important}.vc_custom_1463284814515{margin-bottom:0px!important;padding-right:0px!important}.vc_custom_1462545178572{padding-top:0px!important;padding-right:0px!important;padding-bottom:0px!important;padding-left:0px!important}.vc_custom_1462545184664{padding-top:0px!important;padding-right:0px!important;padding-bottom:0px!important;padding-left:0px!important}.vc_custom_1462545192957{padding-top:0px!important;padding-right:0px!important;padding-bottom:0px!important;padding-left:0px!important}.vc_custom_1463284932685{margin-bottom:0px!important;padding-right:0px!important}.vc_custom_1462545904307{padding-top:0px!important}.vc_custom_1462545960087{padding-top:0px!important}.vc_custom_1462545951798{margin-bottom:0px!important}
</style>
@endpush

@push('meta')
<meta itemprop="name" content="{{config('app.name')}}">
<meta itemprop="description" content="{{$configKeyword->description}}">
<meta itemprop="image" content="{{asset('assets/imagens/logo/logo.png')}}">
<meta property="og:title" content="Cadastro {{config('app.name')}}" />
<meta property="og:url" content="{{route('contact')}}" />
<meta property="og:image" content="{{asset('assets/imagens/logo/logo.png')}}" />
<meta property="og:image:url" content="{{asset('assets/imagens/logo/logo.png')}}" />
<meta property="og:description" content="{{$configKeyword->description}}" />
<meta property="og:site_name" content="{{config('app.name')}}" />
<meta property="og:type" content="register" />
@endpush

@push('scripts-head')
<script type="text/javascript" src="{{asset('assets/avd-content/plugins/yith-avdesign-popup/assets/js/frontend.min.js')}}"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var ypop_frontend_var = {
        "never_show_again_cookie_name": "ypopup-hide-popup-forever-yithpopup-4280",
        "show_next_time_cookie_name": "ypopup-hide-popup-yithpopup-4280",
        "expired": "1",
        "leave_page_message": "",
        "ismobile": ""
    };
    /* ]]> */
</script>

@endpush


@push('body')
<body class="home page-template-default page page-id-4575 yith-wcan-free has-btn-sticky wpb-js-composer js-comp-ver-5.2.1 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">
@endpush

@section('content')
    <div id="jas-content">
        <div class="jas-row jas-page">
            <div class="jas-col-md-12 jas-col-xs-12 mt__60 mb__60" role="main" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                <!-- home.banners.banner-1 -->
                <!-- home.banners.banner-2 -->
                <!-- home.banners.banner-3 -->
            @include('home.banners.banner-4')
            <!-- home.banners.banner-5 -->
                @include('home.banners.banner-6')
                @include('instagram.instagram-1')
            </div>
        </div>
    </div>
@endsection

@push('popup')
@include('modals.popup-1')
@endpush

@push('scripts')

@endpush