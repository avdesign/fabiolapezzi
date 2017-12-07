@extends('layouts.template-2')
@push('title')
<title> Lista de Desejos {{config('app.name')}} {{$configKeyword->description}} </title>
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
<meta property="og:type" content="category" />
@endpush
@push('stylesheet')
<link rel="stylesheet" id="white-animated" href="{{asset('avdesign/themes/white/css/cart.css')}}" type="text/css" media="all" />
@endpush
@push('body')
<body class="page-template-default page page-id-5 logged-in woocommerce-cart woocommerce-page yith-wcan-free wpb-js-composer js-comp-ver-5.2.1 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">
@endpush
@section('content')
    <div id="jas-content">
        <div class="page-head pr tc" style="background: url({{asset('assets/imagens/banners/pages/categorias.jpg')}}) no-repeat center center / cover;">
            <div class="jas-container pr">
                <h1 class="tu mb__10 cw" itemprop="headline">Lista de Desejo</h1>
                <p></p>
            </div>
        </div>

        <div class="jas-container">
            <div class="jas-row jas-page">
                <div class="jas-col-md-12 jas-col-xs-12 mt__60 mb__60" role="main" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                    <div class="woocommerce">
                        <div class="woocommerce-message">
                            “Nome do Produto” removido.
                            <a href="{{route('cart.undo', '8')}}">
                                Desfazer?
                            </a>
                        </div>
                        <form class="woocommerce-cart-form" action="{{route('cart')}}" method="post">

                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Descrição</th>
                                    <th class="product-price">Unitário</th>
                                    <th class="product-quantity">Quantidade</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr class="cart_item ">
                                    <td class="product-thumbnail">
                                        <a href="{{route('product', 'slug')}}">
                                            <img width="130" height="130" src="{{url('assets/imagens/produtos/235/cor-3.jpg')}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />
                                        </a>
                                    </td>
                                    <td class="product-name" data-title="Descrição">
                                        <a href="{{route('product', 'slug')}}">Nome do Produto</a> <br>
                                        Cor: verde <br>
                                        Tamanho: 35 <br>
                                    </td>
                                    <td class="product-price" data-title="Valor">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">R$ </span>35.00
                                        </span>
                                    </td>
                                    <td class="product-quantity" data-title="Quantidade">
                                        <div class="quantity pr fl mr__10">
                                            <input type="number" step="1" min="0" max="" name="cart[12345][qty]" value="2" title="Qtd" class="input-text tc" size="4" />
                                            <div class="qty tc">
                                                <a class="plus db cb pa" href="javascript:void(0);">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <a class="minus db cb pa" href="javascript:void(0);">
                                                    <i class="fa fa-minus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">R$ </span>70.00
                                        </span>
                                    </td>
                                    <td class="product-remove">
                                        <a href="{{route('cart.remove')}}" class="remove" title="Remover este item" data-product_id="5006" data-product_sku="">&times;</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon flex middle-xs">
                                            <label for="coupon_code">Coupom de Desconto:</label>
                                            <input type="text" name="coupon_code" class="input-text br__40" id="coupon_code" value="" placeholder="Aplicar Cupom" />
                                            <input type="submit" class="button" name="apply_coupon" value="Aplicar Cupom" />

                                        </div>
                                        <input type="submit" class="button update-cart" name="update_cart" value="Atualizar" />
                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="65bba1f058" />
                                        <input type="hidden" name="_wp_http_referer" value="/claue/demo/cart/" />
                                        {{csrf_field()}}
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                        </form>

                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Total da Ordem</h2>
                                <table cellspacing="0" class="shop_table shop_table_responsive">
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">R$ </span>70.00
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- include('carts.cart-shipping')-->

                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total">
                                            <strong>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">R$ </span>85.00
                                                </span>
                                            </strong>
                                        </td>
                                    </tr>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward">
                                        Finalizar Ordem
                                    </a>
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
<!-- include('javascripts.cart-shipping-1')-->

<script type="text/javascript" src="{{asset('avdesign/plugins/cart/js/cart.min.js')}}"></script>
<script type='text/javascript'>
    var wc_cart_params = {!! json_encode([
        "ajax_url" => route('cart.update'),
        "wc_ajax_url" => route('cart.fragments'),
        "update_shipping_method_nonce" => "efdbbafda3",
        "apply_coupon_nonce" => "a4951fe60d",
        "remove_coupon_nonce" => "2d22335c3f",
        "token" => csrf_token()
    ]) !!};
</script>
@endpush
