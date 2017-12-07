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
<meta property="og:type" content="category" />
@endpush
@push('stylesheet')
<link rel="stylesheet" id="pm-style-css" href="{{asset('avdesign/plugins/ajax-navigation/css/frontend.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="pm-style-css" href="{{asset('avdesign/plugins/pin-maker/css/pm-frontend.css')}}" type="text/css" media="all" />

@endpush
@push('scripts-head')

@endpush
@push('styles')
<noscript>
    <style>.woocommerce-product-gallery {opacity: 1 !important;}</style>
</noscript>
@endpush
@push('body')
<body class="archive post-type-archive post-type-archive-product logged-in woocommerce woocommerce-page yith-wcan-free wpb-js-composer js-comp-ver-5.2.1 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">
@endpush
@section('content')
    <div class="shop-top-sidebar">
        <aside id="woocommerce_product_categories-4" class="widget woocommerce widget_product_categories">
            <ul class="product-categories">
                <li class="cat-item cat-item-86"><a href="{{route('category', 'feminino')}}">Categoria 1</a></li>
                <li class="cat-item cat-item-127"><a href="{{route('category', 'masculino')}}">Categoria 2</a></li>
            </ul>
        </aside>
    </div>
    <div id="jas-content">
        <div class="jas-wc dib w__100 mb__60" role="main">
            <div class="page-head pr tc">
                <div class="jas-container pr">
                    <h1 class="mb__5 cw">NOME DA CATEGORIA</h1>
                    <p class="mg__0">Descrição da Categoria</p>
                </div>
            </div>
            <nav class="woocommerce-breadcrumb">
                <a href="{{route('home')}}">Home</a>
                <i class="fa fa-angle-right"></i>Nome da Categoria
            </nav>

            <div class="jas-container">
                <div class="jas-filter-wrap pr">

                    @include('categories.fliter.filter-1')

                    <div class="result-count-order">
                        <div class="flex between-xs middle-xs"> <a class="filter-trigger mr__50"><i class="fa fa-sliders fwb"></i></a>

                            <div class="wc-col-switch flex">
                                <a href="#" class="pr one hide-md hidden-sm visible-xs mr__10" data-col="12"></a>
                                <a href="#" class="pr two mr__10" data-col="6"></a>
                                <a href="#" class="pr hidden-xs three mr__10" data-col="4"></a>
                                <a href="#" class="pr hidden-sm four mr__10 active" data-col="3"></a>
                                <a href="#" class="pr hidden-sm six" data-col="2"></a>
                            </div>
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby">
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date" selected='selected'>Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </form>
                        </div>
                    </div>

                    <div class="products jas-row jas-masonry" data-masonry='{"selector":".product","layoutMode":"fitRows"}'>

                        <div class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-5532 product type-product status-publish has-post-thumbnail product_cat-women product_cat-hoodies-sweatshirts product_cat-tops product_cat-accessories product_cat-jewellery product_tag-jewellery product_tag-watch product_tag-women first instock featured shipping-taxable purchasable product-type-variable has-children">
                            <div class="product-inner pr">
                                <div class="product-image pr">
                                    <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-5532">
                                        <div class="yith-wcwl-add-button hide" style="display:block;">
                                            <a href="{{route('wishlist.add')}}" data-product-id="5532" data-product-type="variable" class="add_to_wishlist cw">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <i class="fa fa-spinner fa-pulse ajax-loading pa" style="visibility:hidden"></i>
                                        </div>
                                        <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                            <a class="chp" href="{{route('wishlist.add')}}">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="yith-wcwl-wishlistexistsbrowse show" style="display:none">
                                            <a href="{{route('wishlist.add')}}" class="chp">
                                                <i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-image-flip">
                                        <a href="http://janstudio.net/claue/demo/product/cyan-boheme/">
                                            <img
                                                width="370"
                                                height="472"
                                                src="{{url('assets/imagens/produtos/370/cor-3.jpg')}}"
                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                alt="p2-5"
                                                title="p2-5"
                                                srcset="{{url('assets/imagens/produtos/370/cor-3.jpg')}} 370w,
                                                    {{url('assets/imagens/produtos/118/cor-3.jpg')}} 118w,
                                                    {{url('assets/imagens/produtos/235/cor-3.jpg')}} 235w,
                                                    {{url('assets/imagens/produtos/768/cor-3.jpg')}} 768w,
                                                    {{url('assets/imagens/produtos/803/cor-3.jpg')}} 803w,
                                                    {{url('assets/imagens/produtos/80/cor-3.jpg')}} 80w,
                                                    {{url('assets/imagens/produtos/870/cor-3.jpg')}} 870w"
                                                sizes="(max-width: 370px) 100vw, 370px"
                                            />
                                        </a>
                                        <a href="http://janstudio.net/claue/demo/product/cyan-boheme/" class="db pa back" title="Nome do Produto">
                                            <!-- img troca posição  -->
                                            <a href="{{url('produto/feminino')}}" class="db pa back" title="Nome produto">
                                                <img
                                                    width="370"
                                                    height="472"
                                                    src="{{url('assets/imagens/produtos/370/posicao-2-cor-3.jpg')}}"
                                                    class="attachment-shop_catalog size-shop_catalog"
                                                    alt=""
                                                    srcset="{{url('assets/imagens/produtos/370/posicao-2-cor-3.jpg')}} 370w,
                                                    {{url('assets/imagens/produtos/370/posicao-2-cor-3.jpg')}} 118w,
                                                    {{url('assets/imagens/produtos/370/posicao-2-cor-3.jpg')}} 235w,
                                                    {{url('assets/imagens/produtos/370/posicao-2-cor-3.jpg')}} 768w,
                                                    {{url('assets/imagens/produtos/370/posicao-2-cor-3.jpg')}} 803w,
                                                    {{url('assets/imagens/produtos/370/posicao-2-cor-3.jpg')}} 80w,
                                                    {{url('assets/imagens/produtos/370/posicao-2-cor-3.jpg')}} 870w"
                                                    sizes="(max-width: 370px) 100vw, 370px"
                                                />
                                            </a>
                                        </a>
                                    </div>
                                    <div class="product-btn pa flex column ts__03">
                                        <a class="btn-quickview cd br__40 pl__25 pr__25 bgw tc dib" href="javascript:void(0);" data-prod="5532">View</a>
                                        <a rel="nofollow" href="#" data-quantity="1" data-product_id="5532" data-product_sku=""
                                           class="button product_type_variable add_to_cart_button pr br-36 mb__10">
                                            <i class="fa fa-shopping-cart mr__10"></i>Opções</a>
                                    </div>
                                    <div class="product-attr pa ts__03 cw">
                                        <p><b>33,34,36,38,39</b></p>
                                    </div>
                                </div>
                                <!-- .product-image -->
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{route('product', 'slug-do-produto')}}">Nome do Produto</a></h3>
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">R$</span> 45.00
                                        </span>
                                    </span>
                                    <div class="swatch__list is-flex" data-attribute="pa_color">
                                        <span data-thumb="{{url('assets/imagens/produtos/370/cor-3.jpg')}}"data-variation="preto" class="swatch__list--item is-relative u-small">
                                            <span class="swatch__value" style="background-color:#000000; width:20px;height:20px;"></span>
                                        </span>
                                        <span data-thumb="{{url('assets/imagens/produtos/370/cor-4.jpg')}}" data-variation="pink" class="swatch__list--item is-relative u-small">
                                            <span class="swatch__value" style="background-color:#ffffff; width:20px;height:20px;"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="jas-ajax-load tc mt__40 mb__60" data-load-more='{"page":"6","container":"products","layout":"loadmore"}'>
                        <a href="{{route('filter')}}?page=2">Veja mais produtos</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@graph":[{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/cyan-boheme\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/cyan-boheme\/","name":"Cyan Boheme"},{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/calvin-klein-logo-sweatpants\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/calvin-klein-logo-sweatpants\/","name":"Calvin Klein Logo Sweatpants"},{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/cuffed-beanie\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/cuffed-beanie\/","name":"Cuffed Beanie"},{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/short-sleeved-hoodie-with-step-hem\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/short-sleeved-hoodie-with-step-hem\/","name":"Short Sleeved Hoodie With Step Hem"},{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/woleen-tee\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/woleen-tee\/","name":"Woleen Tee"},{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/grey-beanie\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/grey-beanie\/","name":"Grey Beanie"},{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/pink-leather-watch\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/pink-leather-watch\/","name":"Pink Leather Watch"},{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/brown-sneaker-shoes\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/brown-sneaker-shoes\/","name":"Brown Sneaker Shoes"},{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/men-clothing-combo\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/men-clothing-combo\/","name":"Men clothing combo"},{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/skinny-jeans-in-black\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/skinny-jeans-in-black\/","name":"Skinny Jeans In Black"},{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/herschel-retreat-backpack\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/herschel-retreat-backpack\/","name":"Herschel Retreat Backpack"},{"@type":"Product","@id":"http:\/\/janstudio.net\/claue\/demo\/product\/denim-shell-top-with-ruffle-front\/","url":"http:\/\/janstudio.net\/claue\/demo\/product\/denim-shell-top-with-ruffle-front\/","name":"Denim Shell Top with Ruffle Front"}]}</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_wcan = {
        "container": ".products",
        "pagination": "nav.woocommerce-pagination",
        "result_count": ".woocommerce-result-count",
        "wc_price_slider": {
            "wrapper": ".price_slider",
            "min_price": ".price_slider_amount #min_price",
            "max_price": ".price_slider_amount #max_price"
        },
        "is_mobile": "",
        "scroll_top": ".yit-wcan-container",
        "scroll_top_mode": "mobile",
        "change_browser_url": "1",
        "avada": {
            "is_enabled": false,
            "sort_count": "ul.sort-count.order-dropdown"
        },
        "flatsome": {
            "is_enabled": false,
            "lazy_load_enabled": false
        }
    };
    /* ]]> */
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/claue\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/claue\/demo\/shop\/?layout=masonry&wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/ajax-navigation/js/frontend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/pin-maker/js/pm-frontend.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/jquery/ui/mouse.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/jquery/ui/slider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/accounting/accounting.min.js')}}"></script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_price_slider_params = {
        "min_price": "0",
        "max_price": "100",
        "currency_format_num_decimals": "0",
        "currency_format_symbol": "R$",
        "currency_format_decimal_sep": ".",
        "currency_format_thousand_sep": ",",
        "currency_format": "%s%v"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/price-slider/price-slider.min.js')}}"></script>
@endpush
