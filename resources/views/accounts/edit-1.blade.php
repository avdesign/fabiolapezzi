@extends('layouts.template-1')
@push('title')
<title>Meu Perfil {{config('app.name')}} {{$configKeyword->description}} </title>
<meta name="description" content="{{$configKeyword->description}} , {{$configKeyword->genders}}">
<meta name="keywords" content="{{$configKeyword->keywords}},{{$configKeyword->categories}},{{$configKeyword->genders}}">
@endpush
@push('styles')
<style id='jas-gecko-style-inline-css' type='text/css'>.jas-branding{max-width:200px;margin:auto}.header-6 .header__mid,.header-7{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}.header-6 .header__mid:before{content:"";position:absolute;background:rgba(255,255,255,.85);left:0;top:0;width:100%;height:100%;z-index:0}.header-6 .header__mid .jas-branding,.header-7 .jas-branding{position:relative}.jas-portfolio .page-head{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}.footer__top{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}body,.f__lato{font-family:"Lato";font-weight:400;font-size:14px;background-color:#fff;color:#999}h1,h2,h3,h4,h5,h6,.f__mont{font-family:"Montserrat";font-weight:400}h1,h2,h3,h4,h5,h6{color:#4d5959}h1{font-size:50px}h2{font-size:30px}h3{font-size:20px}h4{font-size:16px}h5{font-size:14px}h6{font-size:12px}a,a:hover,a:active,a.button-o,input.button-o,button.button-o,.cp,.chp:hover,.header-7 .jas-socials a,.header__top .jas-action a:hover,.woocommerce-MyAccount-navigation ul li:hover a,.woocommerce-MyAccount-navigation ul li.is-active a,.jas-menu li a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,#jas-mobile-menu ul>li:hover>a,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>.holder,#jas-footer a:hover,.inside-thumb a:hover,.jas-blog-slider .post-thumbnail>div a:hover,.page-numbers li a:hover,.page-numbers.current,.jas-filter a.selected,.sidebar .widget a:hover,.widget a:hover,.widget.widget_price_filter .price_slider_amount,.widget ul.product-categories li:hover>a,.widget ul.product-categories li.current-cat>a,.widget ul.product_list_widget li a:hover span.product-title,.product-button a.button,.p-video a i,.quantity .qty a:hover,.product_meta a:hover,.wc-tabs li.active a,.product-extra .product-button:not(.flex)>.yith-wcwl-add-to-wishlist .tooltip,.page-head a:hover,.vc_tta-tab.vc_active>a,.woocommerce .widget_layered_nav ul li a:hover,.woocommerce-page .widget_layered_nav ul li a:hover,.woocommerce .widget_layered_nav ul li.chosen a,.woocommerce-page .widget_layered_nav ul li.chosen a,.woocommerce .widget_layered_nav ul li span:hover,.woocommerce-page .widget_layered_nav ul li span:hover,.woocommerce .widget_layered_nav ul li.chosen span,.woocommerce-page .widget_layered_nav ul li.chosen span{color:#b59677}input:not([type="submit"]):not([type="checkbox"]):focus,textarea:focus,a.button-o,input.button-o,button.button-o,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.header-7 .jas-socials a,#jas-backtop,.more-link,.product-button a.button,.product-button>*,.single-btn .btn-quickview,.p-video a,.btn-atc .yith-wcwl-add-to-wishlist a,.header-7 #jas-mobile-menu>ul>li,.header-7 #jas-mobile-menu ul ul{border-color:#b59677}input[type="submit"]:not(.button-o),button,a.button,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.bgp,.bghp:hover,#jas-backtop span:before,.more-link:hover,.widget .tagcloud a:hover,.jas-mini-cart .button.checkout,.woocommerce-pagination-ajax a:hover,.woocommerce-pagination-ajax a.disabled,.jas-ajax-load a:hover,.jas-ajax-load a.disabled,.widget.widget_price_filter .ui-slider-range,.widget.widget_price_filter .ui-state-default,.product-image:hover .product-button a:hover,.yith-wcwl-add-to-wishlist i.ajax-loading,.btn-atc .yith-wcwl-add-to-wishlist a:hover,.entry-summary .single_add_to_cart_button,.entry-summary .external_single_add_to_cart_button,.jas-service[class*="icon-"] .icon:before,.metaslider .flexslider .flex-prev,.metaslider .flexslider .flex-next,.slick-prev,.slick-next{background-color:#b59677}h1,h2,h3,h4,h5,h6,.cd,.wp-caption-text,.woocommerce-MyAccount-navigation ul li a,.jas-menu>li>a,#jas-mobile-menu ul li a,.holder,.page-numbers li,.page-numbers li a,.jas-portfolio-single .portfolio-meta span,.sidebar .widget a,.sidebar .widget ul li:before,.jas-mini-cart .mini_cart_item a:nth-child(2),.widget a,.product-category h3 .count,.widget ul.product-categories li a,.widget ul.product_list_widget li a span.product-title,.widget ul.product_list_widget li ins,.price,.product-image .product-attr,.product_meta>span,.shop_table th,.order-total,.order-total td,.jas-sc-blog .post-info h4 a{color:#4d5959}.error-404.not-found a,.jas-pagination,.woocommerce-pagination,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a{border-color:#4d5959}mark,.bgd,.error-404.not-found a:hover,#wp-calendar caption,.widget .tagcloud a,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-ordering select,.jas-mini-cart .button,.sidebar .widget_shopping_cart .button,.actions .button.apply-cupon,.actions .button.update-cart,.button.continue-button{background-color:#4d5959}.jas-socials a,.header-text,.header__top .jas-action a{color:#fff}.jas-socials a{border-color:#fff}.jas-menu>li>a,#jas-mobile-menu ul>li:hover>a,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>.holder{color:#4d5959}.jas-menu li>a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,.jas-account-menu a:hover{color:#b59677}.jas-menu ul a,.jas-account-menu ul a{color:#fff}.jas-menu ul li a:hover{color:#b59677}.jas-menu ul,.jas-account-menu ul{background:#3e3e3e}#jas-footer:before{background:rgba(0,0,0,.95)}#jas-footer,.footer__top a,.footer__bot a{color:#fff}</style>
@endpush
@push('meta')
<link rel="canonical" href="{{route('edit')}}" />
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
@push('body')
<body class="page-template-default page page-id-7 logged-in woocommerce-account woocommerce-page yith-wcan-free has-btn-sticky wpb-js-composer js-comp-ver-5.2.1 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">
@endpush
@section('content')
    <div id="jas-content">
        <div class="page-head pr tc" style="background: url({{asset('assets/imagens/home/banners/cadastro.jpg')}}) no-repeat center center / cover;">
            <div class="jas-container pr">
                <h1 class="tu mb__10 cw" itemprop="headline">Meu Perfil</h1>
                <p></p>
                <ul class="jas-breadcrumb dib oh">
                    <li class="fl home">
                        <a href="{{route('home.site')}}" title="Home">Home</a></li>
                    <li class="fl separator"> <i class="fa fa-angle-right"></i> </li>
                    <li class="fl current"> Meu Perfil </li>
                </ul>
            </div>
        </div>
        <div class="jas-container">
            <div class="jas-row jas-page">
                <div class="jas-col-md-12 jas-col-xs-12 mt__60 mb__60" role="main" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                    <div class="woocommerce">
                        <nav class="woocommerce-MyAccount-navigation">
                            <ul>
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
                                    <a href="{{route('dashboard')}}">Painel Administrativo</a>
                                </li>
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                    <a href="{{route('orders')}}">Meus Pedidos</a>
                                </li>
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                                    <a href="{{route('messages')}}">Mensagens</a>
                                </li>
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                    <a href="{{route('address')}}">Endereço</a>
                                </li>
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account is-active">
                                    <a href="javascript:void(0);">Perfil</a>
                                </li>
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form-account').submit();">Sair</a>
                                    <form id="logout-form-account" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </nav>

                        <div class="woocommerce-MyAccount-content">
                            @include('flash-messages.flash-message-1')
                            <form id="edit-profile" class="edit-account" action="{{route('edit')}}" method="post">
                                @php
                                    $profile = $user->profile_id;
                                @endphp
                                <legend>Perfil do Cadastro</legend>
                                <div class="woocommerce-checkout-payment">
                                    <ul>
                                        <li>
                                            <input id="profile-2" type="radio" name="user[profile_id]" value="3" onclick="formProfile('{{route('change.profile', 3)}}')" class="input-radio"@if($profile == 3) checked @endif>
                                            <label for="profile-2"> <b> PESSOA JURÍDICA </b> </label>
                                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <input id="profile-3" type="radio" name="user[profile_id]" value="2" onclick="formProfile('{{route('change.profile', 2)}}')" class="input-radio"@if($profile == 2) checked @endif
                                            <label for="profile-3"> <b> PESSOA FÍSICA </b> </label>
                                        </li>
                                    </ul>
                                </div>
                                <br/>
                                <div id="load-profile">
                                    @include('profiles.profile-'.$profile)
                                </div>
                                <div class="clear"></div>

                                <legend>Dados para Contato</legend>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input type="email" name="user[email]" id="email" value="{{$user->email}}" class="woocommerce-Input woocommerce-Input--email input-text" />
                                </p>

                                <div class="clear"></div>
                                <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                    <label for="cell">Celular <span class="required">*</span></label>
                                    <input type="text" name="user[cell]" id="cell" value="{{$user->cell}}"class="woocommerce-Input woocommerce-Input--text input-text" />
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    <label for="phone">Telefone (fixo) <span class="required">*</span></label>
                                    <input type="text" name="user[phone]" id="phone" value="{{$user->phone}}"class="woocommerce-Input woocommerce-Input--text input-text" />
                                </p>
                                <div class="clear"></div>

                                <legend>Alterar Senha</legend>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="password_current">Senha Atual (deixar em branco para deixar inalterada)</label>
                                    <input type="password" name="password_current" id="password_current" class="woocommerce-Input woocommerce-Input--password input-text" />
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                    <label for="password">Nova senha (deixe em branco para deixar inalterada)</label>
                                    <input type="password" name="user[password]" id="password" class="woocommerce-Input woocommerce-Input--password input-text" />
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    <label for="password_2">Confirme a nova senha</label>
                                    <input type="password" name="user[password_confirmation]" id="password-confirm" class="woocommerce-Input woocommerce-Input--password input-text" />
                                </p>

                                <div class="clear"></div>

                                <p>
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="woocommerce-Button button fr" name="save_account_details" value="Alterar Perfil" />
                                </p>

                            </form>

                        </div>
                    </div>
                </div>
                <!-- $classes -->

            </div>
            <!-- .jas-row -->
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript" src="{{asset('assets/avd-includes/js/Mask/jquery.mask.js')}}"></script>
<script type='text/javascript'>
    jQuery( document ).ready(function($) {
        $("#phone").mask('(99)9999-9999');
        $("#cell").mask('(99)99999-9999');
    });
</script>
@endpush