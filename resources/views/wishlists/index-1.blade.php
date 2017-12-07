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
<link rel="stylesheet" id="white-animated" href="{{asset('avdesign/themes/white/css/wishlist.css')}}" type="text/css" media="all" />
@endpush
@push('body')
<body class="page-template-default page page-id-127 logged-in yith-wcan-free woocommerce-wishlist woocommerce woocommerce-page wpb-js-composer js-comp-ver-5.2.1 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">
@endpush
@section('content')
    <div id="jas-content">
        <div class="page-head pr tc" style="background: url({{asset('assets/imagens/banners/pages/categorias.jpg')}}) no-repeat center center / cover;">
            <div class="jas-container pr">
                <h1 class="tu mb__10 cw" itemprop="headline">Lista de Desejos</h1>
                <p>Veja seus produtos</p>
            </div>
        </div>

        <div class="jas-container">
            <div class="jas-row jas-page">
                <div class="jas-col-md-12 jas-col-xs-12 mt__60 mb__60" role="main" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                    <div id="yith-wcwl-messages"></div>

                    <form id="yith-wcwl-form" action="{{route('wishlist')}}" method="post" class="woocommerce">

                        <input type="hidden" id="yith_wcwl_form_nonce" name="yith_wcwl_form_nonce" value="3a8beee159" />
                        <input type="hidden" name="_wp_http_referer" value="/claue/demo/wishlist/" />
                        <!-- TITLE -->
                        <div class="wishlist-title ">
                            <h2>Minha lista de desejo na {{config('app.name')}}</h2> </div>

                        <table class="shop_table cart wishlist_table" data-pagination="no" data-per-page="5" data-page="1" data-id="47" data-token="0SYHI2P58283">

                            <thead>
                                <tr>
                                    <th class="product-remove"></th>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name"><span class="nobr">Descrição do Produto</span></th>
                                    <th class="product-price"><span class="nobr">Valor Uniário</span></th>
                                    <th class="product-stock-status"><span class="nobr">Status</span></th>
                                    <th class="product-add-to-cart"></th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr id="yith-wcwl-row-5006" data-row-id="5006">
                                <td class="product-remove">
                                    <div>
                                        <a href="{{route('wishlist.remove')}}" class="remove remove_from_wishlist" title="Remover este produto">&times;</a>
                                    </div>
                                </td>

                                <td class="product-thumbnail">
                                    <a href="{{route('product', 'slug')}}">
                                        <img width="235" height="235" src="{{url('assets/imagens/produtos/235/cor-3.jpg')}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" /> </a>
                                </td>

                                <td class="product-name">
                                    <a href="{{route('product', 'slug')}}">Nome do Produto</a><br>
                                    Cor: Azul<br>
                                    Grade: 2/35, 3/36<br>
                                </td>

                                <td class="product-price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">R$ </span>35.00
                                    </span>
                                </td>

                                <td class="product-stock-status"><span class="wishlist-in-stock">Verificando</span> </td>

                                <td class="product-add-to-cart">
                                    <a rel="nofollow" href="demo/wishlist/?add-to-cart=5006&#038;remove_from_wishlist_after_add_to_cart=5006&#038;wishlist_id=47&#038;wishlist_token=0SYHI2P58283" data-quantity="1" data-product_id="5006" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart pr br-36 mb__10"> Adicionar</a>
                                </td>
                            </tr>
                            <tr id="yith-wcwl-row-5269" data-row-id="5269">

                                <td class="product-remove">
                                    <div>
                                        <a href="{{route('wishlist.remove')}}" class="remove remove_from_wishlist" title="Remover este produto">&times;</a>
                                    </div>
                                </td>

                                <td class="product-thumbnail">
                                    <a href="{{route('product', 'slug')}}">
                                        <img width="235" height="235" src="{{url('assets/imagens/produtos/235/cor-3.jpg')}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" /> </a>
                                </td>

                                <td class="product-name">
                                    <a href="{{route('product', 'slug')}}">Nome do Produto</a><br>
                                    Cor: Azul<br>
                                    Grade: <br>
                                </td>

                                <td class="product-price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">R$ </span>35.00
                                    </span>
                                </td>

                                <td class="product-stock-status"><span class="wishlist-in-stock">Em Estoque </span> </td>


                                <td class="product-add-to-cart">
                                    <a rel="nofollow" href="{{route('product', 'slug')}}" data-quantity="1" data-product_id="5269" data-product_sku="P15" class="button product_type_variable add_to_cart_button pr br-36 mb__10"> Select options</a>
                                </td>
                            </tr>
                            </tbody>

                            <tfoot>
                            <tr>
                                <td colspan="6">

                                </td>
                            </tr>
                            </tfoot>

                        </table>

                        <input type="hidden" id="yith_wcwl_edit_wishlist" name="yith_wcwl_edit_wishlist" value="8c375cab98" />
                        <input type="hidden" name="_wp_http_referer" value="/claue/demo/wishlist/" />

                    </form>

                </div>
                <!-- $classes -->

            </div>
            <!-- .jas-row -->
        </div>
    </div>
@endsection
