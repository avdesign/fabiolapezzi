@extends('layouts.template-2')
@push('title')
<title> {{$configKeyword->description}} {{config('app.name')}} </title>
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
                    <h1 class="mb__5 cw">{{$category->name}}</h1>
                    <p class="mg__0">{{$category->description}}</p>
                </div>
            </div>
            <nav class="woocommerce-breadcrumb">
                <a href="{{route('home.site')}}">Home</a>
                <i class="fa fa-angle-right"></i>{{$category->name}}
            </nav>

            <div class="jas-container">
                <div class="jas-filter-wrap pr">

                    @include('categories.fliter.filter-1')

                    <div class="result-count-order">
                        <div class="flex between-xs middle-xs">

                            <a class="filter-trigger mr__50"><i class="fa fa-sliders fwb"></i></a>

                            <div class="wc-col-switch flex">
                                <a href="#" class="pr one hide-md hidden-sm visible-xs mr__10" data-col="12"></a>
                                <a href="#" class="pr two mr__10" data-col="6"></a>
                                <a href="#" class="pr hidden-xs three mr__10" data-col="4"></a>
                                <a href="#" class="pr hidden-sm four mr__10 active" data-col="3"></a>
                                <a href="#" class="pr hidden-sm six" data-col="2"></a>
                            </div>
                            <!--
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby">
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date" selected='selected'>Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </form>
                            -->
                        </div>
                    </div>

                    <div class="products jas-row jas-masonry" data-masonry='{"selector":".product","layoutMode":"fitRows"}'>
                        @php
                        $l=1;
                        $f=0;
                        $graph=[];
                        @endphp
                        @foreach($products as $product)
                            @foreach($product->images()->where('active', 1)->orderBy('cover', 'desc')->limit(1)->get() as $color)
                                @php
                                    $src    = urf('assets/imagens/produtos/370x370/'.$color->image);
                                    $srcset = urf('assets/imagens/produtos/370x370/'.$color->image).
                                        ' 370w,'.urf('assets/imagens/produtos/100x100/'.$color->image).
                                        ' 100w,'.urf('assets/imagens/produtos/800x800/'.$color->image).
                                        ' 800w,'.urf('assets/imagens/produtos/1000x1000/'.$color->image).' 1000w';

                                    $graph[] = array(
                                        "@type" => "Product",
                                        "@id" => route('product', $color->slug),
                                        "url" => route('product', $color->slug),
                                        "name" => $color->slug
                                    );
                                @endphp

                                @forelse($color->positions()->where('active', 1)->orderBy('order')->limit(1)->get() as $position)
                                    @php
                                        $pos_src = urf('assets/imagens/produtos/370x370/'.$position->image);
                                        $pos_srcset = urf('assets/imagens/produtos/370x370/'.$position->image).
                                            ' 370w,'.urf('assets/imagens/produtos/100x100/'.$position->image).
                                            ' 100w,'.urf('assets/imagens/produtos/800x800/'.$position->image).
                                            ' 800w,'.urf('assets/imagens/produtos/1000x1000/'.$position->image).' 1000w';
                                    @endphp
                                @empty
                                    @php
                                        $pos_src    = '';
                                        $pos_srcset = '';
                                    @endphp
                                @endforelse

                                @if($f % 4 == 0 )
                                    <div class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-5532 product type-product first">
                                @elseif($l % 4 == 0)
                                    <div class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-5532 product type-product last">
                                @else
                                    <div class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-5532 product type-product">
                                @endif

                                <div class="product-inner pr">
                                    <div class="product-image pr">
                                    <!-- wishlist
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
                                    -->
                                        <div class="product-image-flip">
                                            <a href="{{route('product', $color->slug)}}">
                                                <img width="370" height="370" src="{{$src}}" srcset="{{$srcset}}" alt="p2-5" title="p2-5" sizes="(max-width: 370px) 100vw, 370px" class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                            </a>
                                            <a href="{{route('product', $color->slug)}}" class="db pa back" title="{{$product->name}}">

                                                @if($configSite->change_images == 1 && $pos_src != '')
                                                    <!-- img troca posição  -->
                                                    <a href="{{route('product', $color->slug)}}" class="db pa back" title="{{$product->name}}">
                                                        <img width="370" height="370" src="{{$pos_src}}" alt="" srcset="{{$pos_srcset}}"  class="attachment-shop_catalog size-shop_catalog" />
                                                    </a>

                                                @endif
                                            </a>
                                        </div>
                                        <!-- quickview
                                        <div class="product-btn pa flex column ts__03">
                                            <a class="btn-quickview cd br__40 pl__25 pr__25 bgw tc dib" href="javascript:void(0);" data-prod="5532">View</a>
                                            <a rel="nofollow" href="#" data-quantity="1" data-product_id="5532" data-product_sku=""
                                               class="button product_type_variable add_to_cart_button pr br-36 mb__10">
                                                <i class="fa fa-shopping-cart mr__10"></i>Opções</a>
                                        </div>

                                        <div id="grid-{{$color->id}}" class="product-attr pa ts__03 cw">

                                        </div>
                                        -->
                                    </div>
                                    <!-- .product-image -->
                                    <div class="product-info mt__15">
                                        <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp" href="{{route('product', $color->slug)}}"></a></h3>
                                        @foreach($product->prices as $price)
                                            @if($price->config_profile_client_id == Auth::user()->profile_id)
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">R$ </span> {{$price->price_cash}}
                                                </span>
                                            </span>
                                            @endif
                                        @endforeach
                                        <div class="swatch__list is-flex" data-attribute="pa_color">
                                            @foreach($product->images()->where('active', 1)->orderBy('cover', 'desc')->get() as $color)
                                                <span data-thumb="{{urf('assets/imagens/produtos/370x370/'.$color->image)}}" data-image-id="{{$color->id}}" data-grid="grid-{{$color->id}}" data-variation="preto" class="swatch__list--item is-relative u-small">
                                                    <span class="swatch__value" style="background-color:{{$color->html}}; width:20px;height:20px;"></span>
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $l++;
                                $f++
                            @endphp
                            @endforeach
                         @endforeach
                    </div>

                    <!--
                    <div class="jas-ajax-load tc mt__40 mb__60" data-load-more='{"page":"6","container":"products","layout":"loadmore"}'>
                        <a href="{{route('filter')}}?page=2">Veja mais produtos</a>
                    </div>
                    -->

                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script type="application/ld+json">
{!! json_encode([
    "@context" => "https://schema.org/",
    "@graph" => $graph
]) !!};
</script>

<script type='text/javascript'>
    var yith_wcan  = {!! json_encode([
            "container" => ".products",
            "pagination" => "nav.woocommerce-pagination",
            "result_count" => ".woocommerce-result-count",
            "wc_price_slider" => array(
                "wrapper" => ".price_slider",
                "min_price" => ".price_slider_amount #min_price",
                "max_price" => ".price_slider_amount #max_price"
            ),
            "is_mobile" =>  "",
            "scroll_top" =>  ".yit-wcan-container",
            "scroll_top_mode" => "mobile",
            "change_browser_url" => "1",
            "avada" => array(
                "is_enabled" => false,
                "sort_count" => "ul.sort-count.order-dropdown"
            ),
            "flatsome" => array(
                "is_enabled" => false,
                "lazy_load_enabled" => false
            )
        ]) !!};
</script>
<script type='text/javascript'>
    var woocommerce_params = {!! json_encode([
        "ajax_url" => url('ajax_url-woocommerce_params'),
        "wc_ajax_url" => url('wc_ajax_url-woocommerce_params/layout/masonry/wc-ajax/endpoint'),
        "token" => csrf_token()
    ]) !!};
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/ajax-navigation/js/frontend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/pin-maker/js/pm-frontend.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/jquery/ui/mouse.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/jquery/ui/slider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/accounting/accounting.min.js')}}"></script>
<script type='text/javascript'>
    var woocommerce_price_slider_params = {!! json_encode([
        "min_price" => "0",
        "max_price" => "100",
        "currency_format_num_decimals" => "0",
        "currency_format_symbol" => "R$",
        "currency_format_decimal_sep" => ".",
        "currency_format_thousand_sep" => ",",
        "currency_format" => "%s%v"
    ]) !!};
</script>
<script type="text/javascript" src="{{asset('avdesign/plugins/price-slider/price-slider.min.js')}}"></script>
@endpush