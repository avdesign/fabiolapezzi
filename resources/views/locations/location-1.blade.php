@extends('layouts.template-1')

@push('title')
<title>Localização das Lojas {{config('app.name')}} {{$configKeyword->description}} </title>
<meta name="description" content="{{$configKeyword->description}} , {{$configKeyword->genders}}">
<meta name="keywords" content="{{$configKeyword->keywords}},{{$configKeyword->categories}},{{$configKeyword->genders}}">
@endpush

@push('stylesheet')
@endpush

@push('styles')
<style id='jas-gecko-style-inline-css' type='text/css'>
    .jas-branding{max-width:200px;margin:auto}.header-6 .header__mid:before{content:"";position:absolute;background:rgba(255,255,255,.85);left:0;top:0;width:100%;height:100%;z-index:0}.header-6 .header__mid .jas-branding,.header-7 .jas-branding{position:relative}.f__lato,body{font-family:Lato;font-weight:400;font-size:14px;background-color:#fff;color:#999}.f__mont,h1,h2,h3,h4,h5,h6{font-family:Montserrat;font-weight:400}h1{font-size:50px}h2{font-size:30px}h3{font-size:20px}h4{font-size:16px}h5{font-size:14px}h6{font-size:12px}#jas-footer a:hover,#jas-mobile-menu ul>li.current-menu-ancestor>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li:hover>a,.chp:hover,.cp,.header-7 .jas-socials a,.header__top .jas-action a:hover,.inside-thumb a:hover,.jas-blog-slider .post-thumbnail>div a:hover,.jas-filter a.selected,.jas-menu li a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,.p-video a i,.page-head a:hover,.page-numbers li a:hover,.page-numbers.current,.product-button a.button,.product-extra .product-button:not(.flex)>.yith-wcwl-add-to-wishlist .tooltip,.product_meta a:hover,.quantity .qty a:hover,.sidebar .widget a:hover,.vc_tta-tab.vc_active>a,.wc-tabs li.active a,.widget a:hover,.widget ul.product-categories li.current-cat>a,.widget ul.product-categories li:hover>a,.widget ul.product_list_widget li a:hover span.product-title,.widget.widget_price_filter .price_slider_amount,.woocommerce .widget_layered_nav ul li a:hover,.woocommerce .widget_layered_nav ul li span:hover,.woocommerce .widget_layered_nav ul li.chosen a,.woocommerce .widget_layered_nav ul li.chosen span,.woocommerce-MyAccount-navigation ul li.is-active a,.woocommerce-MyAccount-navigation ul li:hover a,.woocommerce-page .widget_layered_nav ul li a:hover,.woocommerce-page .widget_layered_nav ul li span:hover,.woocommerce-page .widget_layered_nav ul li.chosen a,.woocommerce-page .widget_layered_nav ul li.chosen span,a,a.button-o,a:active,a:hover,button.button-o,input.button-o{color:#b59677}#jas-backtop,.btn-atc .yith-wcwl-add-to-wishlist a,.header-7 #jas-mobile-menu ul ul,.header-7 #jas-mobile-menu>ul>li,.header-7 .jas-socials a,.more-link,.p-video a,.product-button a.button,.product-button>*,.single-btn .btn-quickview,a.button-o,a.button-o-w:hover,a.button-o:hover,button.button-o,button.button-o:hover,input.button-o,input.button-o:hover,input:not([type=submit]):not([type=checkbox]):focus,textarea:focus{border-color:#b59677}#jas-backtop span:before,.bghp:hover,.bgp,.btn-atc .yith-wcwl-add-to-wishlist a:hover,.entry-summary .external_single_add_to_cart_button,.entry-summary .single_add_to_cart_button,.jas-ajax-load a.disabled,.jas-ajax-load a:hover,.jas-mini-cart .button.checkout,.jas-service[class*=icon-] .icon:before,.metaslider .flexslider .flex-next,.metaslider .flexslider .flex-prev,.more-link:hover,.product-image:hover .product-button a:hover,.slick-next,.slick-prev,.widget .tagcloud a:hover,.widget.widget_price_filter .ui-slider-range,.widget.widget_price_filter .ui-state-default,.woocommerce-pagination-ajax a.disabled,.woocommerce-pagination-ajax a:hover,.yith-wcwl-add-to-wishlist i.ajax-loading,a.button,a.button-o-w:hover,a.button-o:hover,button,button.button-o:hover,input.button-o:hover,input[type=submit]:not(.button-o){background-color:#b59677}#jas-mobile-menu ul li a,.cd,.holder,.jas-menu>li>a,.jas-mini-cart .mini_cart_item a:nth-child(2),.jas-portfolio-single .portfolio-meta span,.jas-sc-blog .post-info h4 a,.order-total,.order-total td,.page-numbers li,.page-numbers li a,.price,.product-category h3 .count,.product-image .product-attr,.product_meta>span,.shop_table th,.sidebar .widget a,.sidebar .widget ul li:before,.widget a,.widget ul.product-categories li a,.widget ul.product_list_widget li a span.product-title,.widget ul.product_list_widget li ins,.woocommerce-MyAccount-navigation ul li a,.wp-caption-text,h1,h2,h3,h4,h5,h6{color:#4d5959}.error-404.not-found a,.jas-pagination,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-pagination{border-color:#4d5959}#wp-calendar caption,.actions .button.apply-cupon,.actions .button.update-cart,.bgd,.button.continue-button,.error-404.not-found a:hover,.jas-mini-cart .button,.sidebar .widget_shopping_cart .button,.widget .tagcloud a,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-ordering select,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a,mark{background-color:#4d5959}.header-text,.header__top .jas-action a,.jas-socials a{color:#fff}.jas-socials a{border-color:#fff}#jas-mobile-menu ul>li.current-menu-ancestor>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li:hover>a,.jas-menu>li>a{color:#4d5959}.jas-account-menu a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,.jas-menu li>a:hover{color:#b59677}.jas-account-menu ul a,.jas-menu ul a{color:#fff}.jas-menu ul li a:hover{color:#b59677}.jas-account-menu ul,.jas-menu ul{background:#3e3e3e}#jas-footer:before{background:rgba(0,0,0,.95)}#jas-footer,.footer__bot a,.footer__top a{color:#fff}
    .jas-page > div {margin: 0;}h3 {margin: 0;}
    .vc_custom_1463925630553{padding-top:120px!important;padding-bottom:120px!important;background-position:center!important;background-repeat:no-repeat!important;background-size:cover!important}.vc_custom_1460194003865{background-color:#fff!important;padding:0!important}.vc_custom_1460194202292{background-color:#fff!important;padding:30px 30px 15px!important}
</style>

@endpush

@push('meta')
<meta itemprop="name" content="{{config('app.name')}}">
<meta itemprop="description" content="{{$configKeyword->description}}">
<meta itemprop="image" content="{{asset('assets/imagens/logo/logo.png')}}">
<meta property="og:title" content="Contato {{config('app.name')}}" />
<meta property="og:url" content="{{route('contact')}}" />
<meta property="og:image" content="{{asset('assets/imagens/logo/logo.png')}}" />
<meta property="og:image:url" content="{{asset('assets/imagens/logo/logo.png')}}" />
<meta property="og:description" content="{{$configKeyword->description}}" />
<meta property="og:site_name" content="{{config('app.name')}}" />
<meta property="og:type" content="contact" />
@endpush

@push('scripts-head')
<script type="text/javascript" src="{{asset('assets/avd-includes/js/Mask/jquery.maskedinput.js')}}"></script>
<!--
<script type='text/javascript' src='https://maps.google.com/maps/api/js?key=AIzaSyDRfk-T7EP0NwiS4qtEPaJoQaotH-H_1fo&#038;ver=4.8.2'></script>
-->
@endpush

@push('body')
<body class="page-template-default page page-id-2862 yith-wcan-free has-btn-sticky wpb-js-composer js-comp-ver-5.2.1 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">
@endpush

@section('content')
    <div id="jas-content">
        <div class="jas-row jas-page">
            <div class="jas-col-md-12 jas-col-xs-12 mt__60 mb__60" role="main" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                <div class="vc_row home-contact-us-form pr vc_custom_1463925630553 vc_row-has-fill"
                     style="background-image: url('{{asset('assets/imagens/home/banners/banner-6.jpg')}}') !important; background-position:center center!important;">
                    <div class="jas-container clearfix">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_row vc_inner">
                                        <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-has-fill">
                                            <div class="vc_column-inner vc_custom_1460194003865">
                                                <div class="wpb_wrapper">
                                                    <div class="jas-gmap" id="jas_map_59e010595601c" style="max-width:780px;width:100%;height:587px;"></div>
                                                    <script>
                                                        var map;
                                                        function initMap() {
                                                            map = new google.maps.Map(document.getElementById('jas_map_59e010595601c'), {
                                                                zoom: 16,
                                                                center: new google.maps.LatLng(-23.5408613, -46.6158284),
                                                                mapTypeId: 'roadmap'
                                                            });
                                                            var iconBase = '{{asset('assets/imagens/logo/pin-mapper.png')}}';
                                                            var icons = {
                                                                barrao: {
                                                                    icon: iconBase
                                                                },
                                                                cavalheiro: {
                                                                    icon: iconBase
                                                                }
                                                            };
                                                            var features = [
                                                                {
                                                                    position: new google.maps.LatLng(-23.5392000, -46.6192164),
                                                                    type: 'barrao'
                                                                }, {
                                                                    position: new google.maps.LatLng(-23.5430464, -46.6143284),
                                                                    type: 'cavalheiro'
                                                                }
                                                            ];
                                                            // Create markers.
                                                            features.forEach(function(feature) {
                                                                var marker = new google.maps.Marker({
                                                                    position: feature.position,
                                                                    icon: icons[feature.type].icon,
                                                                    map: map
                                                                });
                                                            });
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inherit-position wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                            <div class="vc_column-inner vc_custom_1460194202292">
                                                <div class="wpb_wrapper">
                                                    <div role="form" class="wpcf7" id="wpcf7-f4106-p2862-o1" lang="en-US" dir="ltr">
                                                        <div class="screen-reader-response"></div>
                                                        <h3>LOCALIZAÇÃO DAS LOJAS</h3>
                                                        <h5>Loja 1 - BARRÃO DE LADÁRIO</h5>
                                                        <h5>VENDAS - NO MÍNIMO 12 PARES</h5>
                                                        <p>Podendo mesclar cores e tamanhos</p>
                                                        <p>Rua Barrão de Ladário, 347</p>
                                                        <p>Brás -São Paulo</p>
                                                        <p>Telefones: (11) 3227-5009 / 2693-3294</p>
                                                        <p>Email:
                                                            <script type="text/javascript" language="javascript">
                                                                { coded = "R9V@09MOhp9SkxxO.Vhd.MC"
                                                                    key = "0jy8zF5ucLwaIUXMtpsg1QDKJrNxBPmVoG9Eie2fSRYnvZH4CT76AdbhlqWOk3"
                                                                    shift=coded.length
                                                                    link=""
                                                                    for (i=0; i<coded.length; i++) {
                                                                        if (key.indexOf(coded.charAt(i))==-1) {
                                                                            ltr = coded.charAt(i)
                                                                            link += (ltr)
                                                                        }
                                                                        else {
                                                                            ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
                                                                            link += (key.charAt(ltr))
                                                                        }
                                                                    }
                                                                    document.write("<a href='mailto:"+link+"'>"+link+"</a>")
                                                                }
                                                            </script>
                                                        </p>
                                                        <h5>Loja 2 - CAVALHEIRO</h5>
                                                        <h5>ATACADO - SÓ CAIXA FECHADA</h5>
                                                        <p>Rua Cavalheiro, 197</p>
                                                        <p>Brás -São Paulo</p>
                                                        <p>Telefones: (11) 2693-9419 / 2693-2196</p>
                                                        <br>
                                                        <h5>Aguardamos sua visita!</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRfk-T7EP0NwiS4qtEPaJoQaotH-H_1fo&callback=initMap">
</script>
@endpush