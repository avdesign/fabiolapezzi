@extends('layouts.template-1')
@push('title')
<title>Endereço de Entrega {{config('app.name')}} {{$configKeyword->description}} </title>
<meta name="description" content="{{$configKeyword->description}} , {{$configKeyword->genders}}">
<meta name="keywords" content="{{$configKeyword->keywords}},{{$configKeyword->categories}},{{$configKeyword->genders}}">
@endpush
@push('styles')
<style id='jas-gecko-style-inline-css' type='text/css'>.jas-branding{max-width:200px;margin:auto}.header-6 .header__mid,.header-7{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}.header-6 .header__mid:before{content:"";position:absolute;background:rgba(255,255,255,.85);left:0;top:0;width:100%;height:100%;z-index:0}.header-6 .header__mid .jas-branding,.header-7 .jas-branding{position:relative}.jas-portfolio .page-head{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}.footer__top{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}body,.f__lato{font-family:"Lato";font-weight:400;font-size:14px;background-color:#fff;color:#999}h1,h2,h3,h4,h5,h6,.f__mont{font-family:"Montserrat";font-weight:400}h1,h2,h3,h4,h5,h6{color:#4d5959}h1{font-size:50px}h2{font-size:30px}h3{font-size:20px}h4{font-size:16px}h5{font-size:14px}h6{font-size:12px}a,a:hover,a:active,a.button-o,input.button-o,button.button-o,.cp,.chp:hover,.header-7 .jas-socials a,.header__top .jas-action a:hover,.woocommerce-MyAccount-navigation ul li:hover a,.woocommerce-MyAccount-navigation ul li.is-active a,.jas-menu li a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,#jas-mobile-menu ul>li:hover>a,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>.holder,#jas-footer a:hover,.inside-thumb a:hover,.jas-blog-slider .post-thumbnail>div a:hover,.page-numbers li a:hover,.page-numbers.current,.jas-filter a.selected,.sidebar .widget a:hover,.widget a:hover,.widget.widget_price_filter .price_slider_amount,.widget ul.product-categories li:hover>a,.widget ul.product-categories li.current-cat>a,.widget ul.product_list_widget li a:hover span.product-title,.product-button a.button,.p-video a i,.quantity .qty a:hover,.product_meta a:hover,.wc-tabs li.active a,.product-extra .product-button:not(.flex)>.yith-wcwl-add-to-wishlist .tooltip,.page-head a:hover,.vc_tta-tab.vc_active>a,.woocommerce .widget_layered_nav ul li a:hover,.woocommerce-page .widget_layered_nav ul li a:hover,.woocommerce .widget_layered_nav ul li.chosen a,.woocommerce-page .widget_layered_nav ul li.chosen a,.woocommerce .widget_layered_nav ul li span:hover,.woocommerce-page .widget_layered_nav ul li span:hover,.woocommerce .widget_layered_nav ul li.chosen span,.woocommerce-page .widget_layered_nav ul li.chosen span{color:#b59677}input:not([type="submit"]):not([type="checkbox"]):focus,textarea:focus,a.button-o,input.button-o,button.button-o,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.header-7 .jas-socials a,#jas-backtop,.more-link,.product-button a.button,.product-button>*,.single-btn .btn-quickview,.p-video a,.btn-atc .yith-wcwl-add-to-wishlist a,.header-7 #jas-mobile-menu>ul>li,.header-7 #jas-mobile-menu ul ul{border-color:#b59677}input[type="submit"]:not(.button-o),button,a.button,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.bgp,.bghp:hover,#jas-backtop span:before,.more-link:hover,.widget .tagcloud a:hover,.jas-mini-cart .button.checkout,.woocommerce-pagination-ajax a:hover,.woocommerce-pagination-ajax a.disabled,.jas-ajax-load a:hover,.jas-ajax-load a.disabled,.widget.widget_price_filter .ui-slider-range,.widget.widget_price_filter .ui-state-default,.product-image:hover .product-button a:hover,.yith-wcwl-add-to-wishlist i.ajax-loading,.btn-atc .yith-wcwl-add-to-wishlist a:hover,.entry-summary .single_add_to_cart_button,.entry-summary .external_single_add_to_cart_button,.jas-service[class*="icon-"] .icon:before,.metaslider .flexslider .flex-prev,.metaslider .flexslider .flex-next,.slick-prev,.slick-next{background-color:#b59677}h1,h2,h3,h4,h5,h6,.cd,.wp-caption-text,.woocommerce-MyAccount-navigation ul li a,.jas-menu>li>a,#jas-mobile-menu ul li a,.holder,.page-numbers li,.page-numbers li a,.jas-portfolio-single .portfolio-meta span,.sidebar .widget a,.sidebar .widget ul li:before,.jas-mini-cart .mini_cart_item a:nth-child(2),.widget a,.product-category h3 .count,.widget ul.product-categories li a,.widget ul.product_list_widget li a span.product-title,.widget ul.product_list_widget li ins,.price,.product-image .product-attr,.product_meta>span,.shop_table th,.order-total,.order-total td,.jas-sc-blog .post-info h4 a{color:#4d5959}.error-404.not-found a,.jas-pagination,.woocommerce-pagination,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a{border-color:#4d5959}mark,.bgd,.error-404.not-found a:hover,#wp-calendar caption,.widget .tagcloud a,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-ordering select,.jas-mini-cart .button,.sidebar .widget_shopping_cart .button,.actions .button.apply-cupon,.actions .button.update-cart,.button.continue-button{background-color:#4d5959}.jas-socials a,.header-text,.header__top .jas-action a{color:#fff}.jas-socials a{border-color:#fff}.jas-menu>li>a,#jas-mobile-menu ul>li:hover>a,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>.holder{color:#4d5959}.jas-menu li>a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,.jas-account-menu a:hover{color:#b59677}.jas-menu ul a,.jas-account-menu ul a{color:#fff}.jas-menu ul li a:hover{color:#b59677}.jas-menu ul,.jas-account-menu ul{background:#3e3e3e}#jas-footer:before{background:rgba(0,0,0,.95)}#jas-footer,.footer__top a,.footer__bot a{color:#fff}</style>
@endpush
@push('meta')
<link rel="canonical" href="{{route('address')}}" />
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
                <h1 class="tu mb__10 cw" itemprop="headline">Endereço de Entrega</h1>
                <p></p>
                <ul class="jas-breadcrumb dib oh">
                    <li class="fl home">
                        <a href="{{route('home.site')}}" title="Home">Home</a></li>
                    <li class="fl separator"> <i class="fa fa-angle-right"></i> </li>
                    <li class="fl current"> Endereço de Entrega</li>
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
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address is-active">
                                    <a href="javascript:void(0);">Endereço</a>
                                </li>
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                                    <a href="{{route('edit')}}">Perfil</a>
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
                            <form method="post" action="{{route('address.update')}}">
                                <h3>Endereço para Entrega</h3>
                                <div class="woocommerce-address-fields">
                                    <div class="woocommerce-address-fields__field-wrapper">
                                        <p class="form-row form-row-first">
                                            <label for="zip_code" class="">CEP <abbr class="required" title="Obrigatório">*</abbr></label>
                                            <input type="text" class="input-text " name="zip_code" id="zip_code" placeholder="CEP" value="{{$adresses->zip_code}}"/>
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="state" class="">Estado <abbr class="required" title="Obrigatório">*</abbr></label>
                                            <select name="state" id="state" class="country_to_state country_select">
                                                @foreach($states as $key => $value)
                                                    <option value="{{$key}}"@if($adresses->state == $key) selected @endif>{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="address" class="">Endereço <abbr class="required" title="Obrigatório">*</abbr></label>
                                            <input type="text" class="input-text " name="address" id="address" placeholder="(Rua,Av,Praça)" value="{{$adresses->address}}"/>
                                        </p>
                                        <p class="form-row form-row-first">
                                            <label for="number" class="">Número <abbr class="required" title="Obrigatório">*</abbr></label>
                                            <input type="text" class="input-text " name="number" id="number" placeholder="Número" value="{{$adresses->number}}" />
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="complement" class="">Complemento</label>
                                            <input type="text" class="input-text " name="complement" id="complement" placeholder="Complemento"/>
                                        </p>
                                        <p class="form-row form-row-first">
                                            <label for="district" class="">Bairro <abbr class="required" title="Obrigatório">*</abbr></label>
                                            <input type="text" class="input-text " name="district" id="district" placeholder="Bairro" value="{{$adresses->district}}"/>
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="city" class="">Cidade <abbr class="required" title="Obrigatório">*</abbr></label>
                                            <input type="text" class="input-text " name="city" id="city" placeholder="Cidade" value="{{$adresses->city}}"/>
                                        </p>

                                    </div>

                                    <p>
                                        <input type="submit" class="button" name="update_address" value="Atualizar" />
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </p>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript" src="{{asset('assets/avd-includes/js/Mask/jquery.mask.js')}}"></script>
<script type='text/javascript'>
    jQuery( document ).ready(function($) {
        $("#zip_code").mask('99999-999');

        $("#zip_code").on('keyup', function () {
            var zip_code = $(this).val();
            if (zip_code.length == 9) {
                $.get('https://viacep.com.br/ws/'+ zip_code +'/json')
                    .then(function (data) {
                        if (data.erro == true) {

                        } else {
                            $("#state").val(data.uf);
                            $("#address").val(data.logradouro);
                            $("#district").val(data.bairro);
                            $("#city").val(data.localidade);
                            Materialize.updateTextFields();
                        }
                    })
            }

        });
    });
</script>
@endpush