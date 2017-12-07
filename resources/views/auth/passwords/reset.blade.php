@extends('layouts.template-1')

@push('title')
<title> Área do Cliente {{config('app.name')}}  </title>
@endpush

@push('styles')
<style id="jas-gecko-style-inline-css" type="text/css">
    .radio-form li{list-style-type:none}.jas-branding{max-width:200px;margin:auto}body,.f__lato{font-family:"Lato";font-weight:400;font-size:14px;background-color:#fff;color:#999999}h1,h2,h3,h4,h5,h6,.f__mont{font-family:"Montserrat";font-weight:400}h1,h2,h3,h4,h5,h6{color:#4d5959}h1{font-size:50px}h2{font-size:30px}h3{font-size:20px}h4{font-size:16px}h5{font-size:14px}h6{font-size:12px}a,a:hover,a:active,a.button-o,input.button-o,button.button-o,.cp,.chp:hover,.header-7 .jas-socials a,.header__top .jas-action a:hover,.woocommerce-MyAccount-navigation ul li:hover a,.woocommerce-MyAccount-navigation ul li.is-active a,.jas-menu li a:hover,.jas-menu li.current-menu-ancestor > a,.jas-menu li.current-menu-item > a,#jas-mobile-menu ul > li:hover > a,#jas-mobile-menu ul > li.current-menu-item > a,#jas-mobile-menu ul > li.current-menu-parent > a,#jas-mobile-menu ul > li.current-menu-ancestor > a,#jas-mobile-menu ul > li:hover > .holder,#jas-mobile-menu ul > li.current-menu-item > .holder,#jas-mobile-menu ul > li.current-menu-parent > .holder,#jas-mobile-menu ul > li.current-menu-ancestor > .holder,#jas-footer a:hover,.inside-thumb a:hover,.jas-blog-slider .post-thumbnail > div a:hover,.page-numbers li a:hover,.page-numbers.current,.jas-filter a.selected,.sidebar .widget a:hover,.widget a:hover,.widget.widget_price_filter .price_slider_amount,.widget ul.product-categories li:hover > a,.widget ul.product-categories li.current-cat > a,.widget ul.product_list_widget li a:hover span.product-title,.product-button a.button,.p-video a i,.quantity .qty a:hover,.product_meta a:hover,.wc-tabs li.active a,.product-extra .product-button:not(.flex) > .yith-wcwl-add-to-wishlist .tooltip,.page-head a:hover,.vc_tta-tab.vc_active > a,.woocommerce .widget_layered_nav ul li a:hover,.woocommerce-page .widget_layered_nav ul li a:hover,.woocommerce .widget_layered_nav ul li.chosen a,.woocommerce-page .widget_layered_nav ul li.chosen a,.woocommerce .widget_layered_nav ul li span:hover,.woocommerce-page .widget_layered_nav ul li span:hover,.woocommerce .widget_layered_nav ul li.chosen span,.woocommerce-page .widget_layered_nav ul li.chosen span{color:#b59677}input:not([type="submit"]):not([type="checkbox"]):focus,textarea:focus,a.button-o,input.button-o,button.button-o,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.header-7 .jas-socials a,#jas-backtop,.more-link,.product-button a.button,.product-button > *,.single-btn .btn-quickview,.p-video a,.btn-atc .yith-wcwl-add-to-wishlist a,.header-7 #jas-mobile-menu > ul > li,.header-7 #jas-mobile-menu ul ul{border-color:#b59677}input[type="submit"]:not(.button-o),button,a.button,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.bgp,.bghp:hover,#jas-backtop span:before,.more-link:hover,.widget .tagcloud a:hover,.jas-mini-cart .button.checkout,.woocommerce-pagination-ajax a:hover,.woocommerce-pagination-ajax a.disabled,.jas-ajax-load a:hover,.jas-ajax-load a.disabled,.widget.widget_price_filter .ui-slider-range,.widget.widget_price_filter .ui-state-default,.product-image:hover .product-button a:hover,.yith-wcwl-add-to-wishlist i.ajax-loading,.btn-atc .yith-wcwl-add-to-wishlist a:hover,.entry-summary .single_add_to_cart_button,.entry-summary .external_single_add_to_cart_button,.jas-service[class*="icon-"] .icon:before,.metaslider .flexslider .flex-prev,.metaslider .flexslider .flex-next,.slick-prev,.slick-next{background-color:#b59677}h1,h2,h3,h4,h5,h6,.cd,.wp-caption-text,.woocommerce-MyAccount-navigation ul li a,.jas-menu > li > a,#jas-mobile-menu ul li a,.holder,.page-numbers li,.page-numbers li a,.jas-portfolio-single .portfolio-meta span,.sidebar .widget a,.sidebar .widget ul li:before,.jas-mini-cart .mini_cart_item a:nth-child(2),.widget a,.product-category h3 .count,.widget ul.product-categories li a,.widget ul.product_list_widget li a span.product-title,.widget ul.product_list_widget li ins,.price,.product-image .product-attr,.product_meta > span,.shop_table th,.order-total,.order-total td,.jas-sc-blog .post-info h4 a{color:#4d5959}.error-404.not-found a,.jas-pagination,.woocommerce-pagination,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a{border-color:#4d5959}mark,.bgd,.error-404.not-found a:hover,#wp-calendar caption,.widget .tagcloud a,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-ordering select,.jas-mini-cart .button,.sidebar .widget_shopping_cart .button,.actions .button.apply-cupon,.actions .button.update-cart,.button.continue-button{background-color:#4d5959}.jas-socials a,.header-text,.header__top .jas-action a{color:#fff}.jas-socials a{border-color:#fff}.jas-menu > li > a,#jas-mobile-menu ul > li:hover > a,#jas-mobile-menu ul > li.current-menu-item > a,#jas-mobile-menu ul > li.current-menu-parent > a,#jas-mobile-menu ul > li.current-menu-ancestor > a,#jas-mobile-menu ul > li:hover > .holder,#jas-mobile-menu ul > li.current-menu-item > .holder,#jas-mobile-menu ul > li.current-menu-parent > .holder,#jas-mobile-menu ul > li.current-menu-ancestor > .holder{color:#4d5959}.jas-menu li > a:hover,.jas-menu li.current-menu-ancestor > a,.jas-menu li.current-menu-item > a,.jas-account-menu a:hover{color:#b59677}.jas-menu ul a,.jas-account-menu ul a{color:#fff}.jas-menu ul li a:hover{color:#b59677}.jas-menu ul,.jas-account-menu ul{background:#3e3e3e}#jas-footer:before{background:rgba(0, 0, 0, 0.95)}#jas-footer,.footer__top a,.footer__bot a{color:#fff}
    .help-block,.has-error .radio,.has-error .radio-inline,.has-error.checkbox label,.has-error.checkbox-inline label,.has-error.radio label,.has-error.radio-inline label{color:#a94442}
</style>
@endpush

@push('body')
<body class="page-template-default page page-id-7 woocommerce-account woocommerce-page yith-wcan-free has-btn-sticky wpb-js-composer js-comp-ver-5.2.1 vc_responsive"  itemscope="itemscope" itemtype="http://schema.org/WebPage" >
@endpush
@section('content')
    <div id="jas-content">
        <div class="jas-container">
            <div class="jas-row jas-page">
                <div class="jas-col-md-12 jas-col-xs-12 mt__60 mb__60" role="main" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                    <div class="woocommerce">
                        <div class="jas-container login-form">

                            <div class="col2-set jas-row" id="customer_login">
                                <div class="col-1 jas-col-md-3 jas-col-sm-6 jas-col-xs-12"></div>

                                <div class="col-1 jas-col-md-6 jas-col-sm-6 jas-col-xs-12">

                                    <div class="form-register">
                                        <h2>Recuperar snha</h2>
                                        @if (session('status'))
                                            <div class="woocommerce-message">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form method="post" action="{{ route('password.request') }}" class="reset-password">

                                            <p class="form-row{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="username">Seu Email<span class="required">*</span></label>
                                                <input type="text" class="input-text" name="email" id="email" value="{{ $email or old('email') }}" />
                                            </p>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            <p class="form-row{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="password">Senha <span class="required">*</span></label>
                                                <input class="input-text" type="password" name="password" id="password" />
                                            </p>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif

                                            <p class="form-row{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                <label for="password">Confirme a Senha <span class="required">*</span></label>
                                                <input class="input-text" type="password" name="password_confirmation" id="password-confirm" />
                                            </p>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                            <p class="form-row">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                                <input type="hidden" name="token" value="{{ $token }}">
                                                <button type="submit" class="btn btn-primary fr">Recuperar Senha</button>
                                            </p>
                                        </form>
                                    </div>

                                </div>

                                <div class="col-3 jas-col-md-3 jas-col-sm-6 jas-col-xs-12"></div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection