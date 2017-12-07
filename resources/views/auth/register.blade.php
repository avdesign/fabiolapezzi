@extends('layouts.template-1')

@push('title')
<title> Cadastro {{config('app.name')}} {{$configKeyword->description}} </title>
<meta name="description" content="{{$configKeyword->description}} , {{$configKeyword->genders}}">
<meta name="keywords" content="{{$configKeyword->keywords}},{{$configKeyword->categories}},{{$configKeyword->genders}}">
@endpush

@push('styles')
<style id="jas-gecko-style-inline-css" type="text/css">
    .radio-form li{list-style-type:none}.jas-branding{max-width:200px;margin:auto}body,.f__lato{font-family:"Lato";font-weight:400;font-size:14px;background-color:#fff;color:#999999}h1,h2,h3,h4,h5,h6,.f__mont{font-family:"Montserrat";font-weight:400}h1,h2,h3,h4,h5,h6{color:#4d5959}h1{font-size:50px}h2{font-size:30px}h3{font-size:20px}h4{font-size:16px}h5{font-size:14px}h6{font-size:12px}a,a:hover,a:active,a.button-o,input.button-o,button.button-o,.cp,.chp:hover,.header-7 .jas-socials a,.header__top .jas-action a:hover,.woocommerce-MyAccount-navigation ul li:hover a,.woocommerce-MyAccount-navigation ul li.is-active a,.jas-menu li a:hover,.jas-menu li.current-menu-ancestor > a,.jas-menu li.current-menu-item > a,#jas-mobile-menu ul > li:hover > a,#jas-mobile-menu ul > li.current-menu-item > a,#jas-mobile-menu ul > li.current-menu-parent > a,#jas-mobile-menu ul > li.current-menu-ancestor > a,#jas-mobile-menu ul > li:hover > .holder,#jas-mobile-menu ul > li.current-menu-item > .holder,#jas-mobile-menu ul > li.current-menu-parent > .holder,#jas-mobile-menu ul > li.current-menu-ancestor > .holder,#jas-footer a:hover,.inside-thumb a:hover,.jas-blog-slider .post-thumbnail > div a:hover,.page-numbers li a:hover,.page-numbers.current,.jas-filter a.selected,.sidebar .widget a:hover,.widget a:hover,.widget.widget_price_filter .price_slider_amount,.widget ul.product-categories li:hover > a,.widget ul.product-categories li.current-cat > a,.widget ul.product_list_widget li a:hover span.product-title,.product-button a.button,.p-video a i,.quantity .qty a:hover,.product_meta a:hover,.wc-tabs li.active a,.product-extra .product-button:not(.flex) > .yith-wcwl-add-to-wishlist .tooltip,.page-head a:hover,.vc_tta-tab.vc_active > a,.woocommerce .widget_layered_nav ul li a:hover,.woocommerce-page .widget_layered_nav ul li a:hover,.woocommerce .widget_layered_nav ul li.chosen a,.woocommerce-page .widget_layered_nav ul li.chosen a,.woocommerce .widget_layered_nav ul li span:hover,.woocommerce-page .widget_layered_nav ul li span:hover,.woocommerce .widget_layered_nav ul li.chosen span,.woocommerce-page .widget_layered_nav ul li.chosen span{color:#b59677}input:not([type="submit"]):not([type="checkbox"]):focus,textarea:focus,a.button-o,input.button-o,button.button-o,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.header-7 .jas-socials a,#jas-backtop,.more-link,.product-button a.button,.product-button > *,.single-btn .btn-quickview,.p-video a,.btn-atc .yith-wcwl-add-to-wishlist a,.header-7 #jas-mobile-menu > ul > li,.header-7 #jas-mobile-menu ul ul{border-color:#b59677}input[type="submit"]:not(.button-o),button,a.button,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.bgp,.bghp:hover,#jas-backtop span:before,.more-link:hover,.widget .tagcloud a:hover,.jas-mini-cart .button.checkout,.woocommerce-pagination-ajax a:hover,.woocommerce-pagination-ajax a.disabled,.jas-ajax-load a:hover,.jas-ajax-load a.disabled,.widget.widget_price_filter .ui-slider-range,.widget.widget_price_filter .ui-state-default,.product-image:hover .product-button a:hover,.yith-wcwl-add-to-wishlist i.ajax-loading,.btn-atc .yith-wcwl-add-to-wishlist a:hover,.entry-summary .single_add_to_cart_button,.entry-summary .external_single_add_to_cart_button,.jas-service[class*="icon-"] .icon:before,.metaslider .flexslider .flex-prev,.metaslider .flexslider .flex-next,.slick-prev,.slick-next{background-color:#b59677}h1,h2,h3,h4,h5,h6,.cd,.wp-caption-text,.woocommerce-MyAccount-navigation ul li a,.jas-menu > li > a,#jas-mobile-menu ul li a,.holder,.page-numbers li,.page-numbers li a,.jas-portfolio-single .portfolio-meta span,.sidebar .widget a,.sidebar .widget ul li:before,.jas-mini-cart .mini_cart_item a:nth-child(2),.widget a,.product-category h3 .count,.widget ul.product-categories li a,.widget ul.product_list_widget li a span.product-title,.widget ul.product_list_widget li ins,.price,.product-image .product-attr,.product_meta > span,.shop_table th,.order-total,.order-total td,.jas-sc-blog .post-info h4 a{color:#4d5959}.error-404.not-found a,.jas-pagination,.woocommerce-pagination,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a{border-color:#4d5959}mark,.bgd,.error-404.not-found a:hover,#wp-calendar caption,.widget .tagcloud a,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-ordering select,.jas-mini-cart .button,.sidebar .widget_shopping_cart .button,.actions .button.apply-cupon,.actions .button.update-cart,.button.continue-button{background-color:#4d5959}.jas-socials a,.header-text,.header__top .jas-action a{color:#fff}.jas-socials a{border-color:#fff}.jas-menu > li > a,#jas-mobile-menu ul > li:hover > a,#jas-mobile-menu ul > li.current-menu-item > a,#jas-mobile-menu ul > li.current-menu-parent > a,#jas-mobile-menu ul > li.current-menu-ancestor > a,#jas-mobile-menu ul > li:hover > .holder,#jas-mobile-menu ul > li.current-menu-item > .holder,#jas-mobile-menu ul > li.current-menu-parent > .holder,#jas-mobile-menu ul > li.current-menu-ancestor > .holder{color:#4d5959}.jas-menu li > a:hover,.jas-menu li.current-menu-ancestor > a,.jas-menu li.current-menu-item > a,.jas-account-menu a:hover{color:#b59677}.jas-menu ul a,.jas-account-menu ul a{color:#fff}.jas-menu ul li a:hover{color:#b59677}.jas-menu ul,.jas-account-menu ul{background:#3e3e3e}#jas-footer:before{background:rgba(0, 0, 0, 0.95)}#jas-footer,.footer__top a,.footer__bot a{color:#fff}
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
@push('body')

@endpush
@section('content')
    <div id="jas-content">

        <div class="jas-container">
            <div class="jas-row jas-page">
                <div class="jas-col-md-12 jas-col-xs-12 mt__60 mb__60" role="main" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                    <div class="woocommerce">
                        @include('flash-messages.flash-message-1')
                        <div class="register-content">
                            <form id="form-register" method="post" action="{{route('register')}}" class="register" onsubmit="return false">
                                <div class="col2-set jas-row" id="customer_login">
                                    <div class="col-1 jas-col-md-6 jas-col-sm-6 jas-col-xs-12">

                                        <legend>Perfil do Cadastro</legend>
                                        <div class="woocommerce-checkout-payment">
                                            <ul class="radio-form">
                                                <li>
                                                    <input id="profile-2" type="radio" name="user[profile_id]" value="3" onclick="formProfile('{{route('option.profile', 3)}}')" class="input-radio" {{ old('user.profile_id') == 3 ? 'checked' : '' }}>
                                                    <label for="profile-2"> <b> PESSOA JURÍDICA </b> </label>
                                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                    <input id="profile-3" type="radio" name="user[profile_id]" value="2" onclick="formProfile('{{route('option.profile', 2)}}')" class="input-radio" {{ old('user.profile_id') == 2 ? 'checked' : '' }}>
                                                    <label for="profile-3"> <b> PESSOA FÍSICA </b> </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <br/>
                                        <div id="load-profile">
                                            @if (old('user.profile_id'))
                                                @include('profiles.profile-'.old('user.profile_id'))
                                            @endif
                                        </div>

                                        <legend>Dados Para Contato</legend>
                                        <p class="form-row form-row-wide">
                                            <label for="email" class="">Email<span class="required">*</span></label>
                                            <input type="email" name="user[email]" id="email" value="{{ old('user.email') }}" class="input-text">
                                        </p>
                                        <p class="form-row form-row-first">
                                            <label for="cell_phone" class="">Celular<span class="required">*</span></label>
                                            <input type="text" name="user[cell]" id="cell" value="{{ old('user.cell') }}" class="input-text">
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="phone" class="">Telefone (Fixo)<span class="required">*</span></label>
                                            <input type="text" name="user[phone]" id="phone" value="{{ old('user.phone') }}" class="input-text">
                                        </p>
                                    </div>
                                    <div class="col-2 jas-col-md-6 jas-col-sm-6 jas-col-xs-12">
                                        <legend>Endereço para Entrega</legend>
                                        <p class="form-row form-row-first">
                                            <label for="zip_code" class="">CEP<span class="required">*</span></label>
                                            <input type="text" name="address[zip_code]" id="zip_code" value="{{ old('address.zip_code') }}" class="input-text">
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="state" class="">Estado<span class="required">*</span></label>
                                            <select name="address[state]" id="state" class="select">
                                                <option value="">Selecione um estado…</option>
                                                @foreach($states as $key => $value)
                                                    <option value="{{$key}}" {{ old('address.state') == $key ? 'selected' : '' }}>{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="address" class="">Endereço<span class="required">*</span></label>
                                            <input type="text" name="address[address]" id="address" value="{{ old('address.address') }}" class="input-text">
                                        </p>
                                        <p class="form-row form-row-first">
                                            <label for="number" class="">Número<span class="required">*</span></label>
                                            <input type="text" name="address[number]" id="number" value="{{ old('address.number') }}" class="input-text">
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="complement" class="">Complemento</label>
                                            <input type="text" name="address[complement]" id="complement" value="{{ old('address.complement') }}" class="input-text">
                                        </p>

                                        <p class="form-row form-row-first">
                                            <label for="district" class="">Bairro<span class="required">*</span></label>
                                            <input type="text" name="address[district]" id="district" value="{{ old('address.district') }}" class="input-text">
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="city" class="">Cidade<span class="required">*</span></label>
                                            <input type="text" name="address[city]" id="city" value="{{ old('address.city') }}" class="input-text">
                                        </p>


                                        <legend>Senha de Acesso</legend>
                                        <p class="form-row form-row-first">
                                            <label for="password" class="">Senha<span class="required">*</span></label>
                                            <input type="password" name="user[password]" id="password" value="{{ old('user.password') }}" class="input-text">
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="password-confirm" class="">Confirme a Senha<span class="required">*</span></label>
                                            <input type="password" name="user[password_confirmation]" id="password-confirm" value="{{ old('user.password_confirmation') }}" class="input-text">
                                        </p>

                                        <p class="form-row form-row-wide">
                                            <input type="checkbox"  name="user[newsletter]" id="newsletter" checked>
                                            <span> Registre-se aqui para receber boletins informativos da {{config('app.name')}}</span>
                                        </p>


                                        <p class="form-row">
                                            <button type="submit" id="form-register-submit" onclick="postFormJson(jQuery(this.form).attr('id'));" class="btn btn-primary fr">Enviar</button>
                                            <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
                                        </p>
                                        <div id="return-form-register" style="display:none"></div>




                                    </div>
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
        $("#phone").mask('(99)9999-9999');
        $("#cell").mask('(99)99999-9999');
        $("#document1_2").mask('999.999.999-99');
        $("#document1_3").mask('99.999.999/9999-99');

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
