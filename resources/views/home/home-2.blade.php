@extends('layouts.template-2')
@push('title')
<title> {{config('app.name')}} {{$configKeyword->description}} </title>
<meta name="author" content="AVDESIGN: Anselmo Velame">
<meta name="description" content="{{$configKeyword->description}} , {{$configKeyword->genders}}">
<meta name="keywords" content="{{$configKeyword->keywords}},{{$configKeyword->categories}},{{$configKeyword->genders}}">
@endpush
@push('meta')
<link rel="canonical" href="{{route('home')}}" />
<link rel="shortlink" href="{{route('home')}}" />
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
@push('stylesheet')
<link rel="stylesheet" id="ypop_icon-retinaicon-font-css" href="{{asset('avdesign/plugins/yith-popup/fonts/retinaicon-font/style.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="ypop_frontend-css" href="{{asset('avdesign/plugins/yith-popup/css/frontend.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="ypop_style-css" href="{{asset('avdesign/plugins/yith-popup/css/style.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="ypop_theme1-css" href="{{asset('avdesign/plugins/yith-popup/css/theme1.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="white-child" href="{{asset('avdesign/themes/white/css/home.css')}}" type="text/css" media="all" />

@endpush
@push('styles')
<style type="text/css" data-type="vc_custom-css">.jas-page > div {margin: 0;}h3 {margin: 0;}</style>
<style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_slider_1 {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
        background-color: #f5f6f8 !important;
    }

    .vc_custom_metro_1 {
        margin-top: 0px !important;
        margin-bottom: 80px !important;
        padding-right: 30px !important;
        padding-left: 30px !important;
    }

    .vc_custom_instagram_1 {
        padding-top: 85px !important;
    }

    .vc_custom_icons_info_1 {
        padding-top: 50px !important;
        padding-bottom: 25px !important;
    }

    .vc_custom_banners{margin-top: 30px !important;margin-bottom: 50px !important;}

    .vc_custom_1491031924423 {
        margin-bottom: 30px !important;
    }

    .vc_custom_1491031280690 {
        margin-bottom: 20px !important;
    }
</style>
@endpush
@push('scripts-head')
<script type="text/javascript" src="{{asset('avdesign/plugins/yith-popup/js/jquery.cookie.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/yith-popup/js/jquery.yitpopup.min.js')}}"></script>
<script type='text/javascript'>
    var ypop_frontend_var = {!! json_encode([
        "never_show_again_cookie_name" => "ypopup-hide-popup-forever-yithpopup-4280",
        "show_next_time_cookie_name" => "ypopup-hide-popup-yithpopup-4280",
        "expired" => "1",
        "leave_page_message" => "",
        "ismobile" => ""
        ]) !!};
</script>
<!--
<script type="text/javascript" src="{{asset('avdesign/plugins/yith-popup/js/frontend.min.js')}}"></script>
-->
@endpush

@push('body')
<body class="page-template-default page page-id-5179 yith-wcan-free wpb-js-composer js-comp-ver-5.2.1 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">
@endpush
@section('content')
    <!-- #home-2 -->
    <div id="jas-content">
        <div class="jas-row jas-page">
            <div class="jas-col-md-12 jas-col-xs-12 mt__60 mb__60" role="main" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                @include('home.page_head.banner-1')
                @include('home.sections.metro-1')
            </div>
        </div>
    </div>
@endsection

@push('popup')
@include('modals.popup-2')
@endpush
@push('scripts')
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/claue\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/claue\/demo\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<link rel="stylesheet" id="metaslider-flex-slider-css" href="{{asset('avdesign/plugins/flexslider/flexslider.css')}}" type="text/css" media="all" property="stylesheet" />
<link rel="stylesheet" id="metaslider-flex-slider-css" href="{{asset('avdesign/plugins/metaslider/public.css')}}" type="text/css" media="all" property="stylesheet" />
<script type="text/javascript" src="{{asset('avdesign/plugins/js_composer/js/js_composer_front.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/flexslider/jquery.flexslider-min.js')}}"></script>
@endpush