@extends('layouts.template-2')
@push('title')
<title> {{config('app.name')}} {{$configKeyword->description}} </title>
<meta name="author" content="AVDESIGN: Anselmo Velame">
<meta name="description" content="{{$configKeyword->description}} , {{$configKeyword->genders}}">
<meta name="keywords" content="{{$configKeyword->keywords}},{{$configKeyword->categories}},{{$configKeyword->genders}}">
@endpush
@php
    foreach($product->prices as $price){
        if($price->config_profile_client_id == Auth::user()->profile_id) {
            $price_cash = $price->price_cash;
            $price_card = $price->price_card;
        }
    }

    foreach ($product->images as $color) {


        $gallery  = '<div class="p-item woocommerce-product-gallery__image jas-image-zoom">';

        if ($color->id == $image->id) {
            $gallery  = '<div data-thumb="'.urf($configImg['thumb']['C']['path'].$color->image).'" class="p-item woocommerce-product-gallery__image jas-image-zoom">';
        }

        $gallery  .= '<a href="'.urf($configImg['zoom']['C']['path'].$color->image).'" class="zoom" data-rel="prettyPhoto[product-gallery]">';
        $gallery  .= '<img width="750" height="750" src="'.urf($configImg['large']['C']['path'].$color->image).'" class="attachment-shop_single size-shop_single wp-post-image" ';
        $gallery  .= 'alt="" title="" data-src="'.urf($configImg['large']['C']['path'].$color->image).'" data-large_image="'.urf($configImg['large']['C']['path'].$color->image).'" ';
        $gallery  .= 'data-large_image_width="'.$configImg['large']['C']['width'].'" data-large_image_height="'.$configImg['large']['C']['height'].
                     '" srcset="'.urf($configImg['large']['C']['path'].$color->image).
                     ' '.$configImg['large']['C']['width'].'w,'.urf($configImg['thumb']['C']['path'].$color->image).
                     ' '.$configImg['thumb']['C']['width'].'w,'.urf($configImg['normal']['C']['path'].$color->image).
                     ' '.$configImg['normal']['C']['width'].'w,'.urf($configImg['zoom']['C']['path'].$color->image).
                     ' '.$configImg['zoom']['C']['width'].'w" sizes="(max-width: 750px) 100vw, 750px"';
        $gallery  .= '/>';
        $gallery  .= '</a>';
        $gallery  .= '</div>';

        $carousel  = '<div>';
        $carousel .= '<img width="'.$configImg['thumb']['C']['width'].'" height="'.$configImg['thumb']['C']['height'].'" ';
        $carousel .= 'src="'.urf($configImg['thumb']['C']['path'].$color->image).'" ';
        $carousel .= 'class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" ';
        $carousel .= 'alt="'.$product->name.' '.$color->color.'" ';
        $carousel .= 'title="'.$product->name.' '.$color->color.'" ';
        $carousel .= 'srcset="'.urf($configImg['thumb']['C']['path'].$color->image).
                            ' '.$configImg['thumb']['C']['width'].'w,'.urf($configImg['normal']['C']['path'].$color->image).
                            ' '.$configImg['normal']['C']['width'].'w,'.urf($configImg['large']['C']['path'].$color->image).
                            ' '.$configImg['large']['C']['width'].'w,'.urf($configImg['zoom']['C']['path'].$color->image).
                            ' '.$configImg['zoom']['C']['width'].'w" ';
        $carousel .= 'sizes="(max-width: 100px) 100vw, 100px"';
        $carousel .= '/>';
        $carousel .= '<div>';



        $default_gallery[] = array(
            "single" => urf($configImg['large']['C']['path'].$color->image),
            "thumbnail" => urf($configImg['thumb']['C']['path'].$color->image),
            "data-src" => urf($configImg['large']['C']['path'].$color->image),
            "data-large_image" => urf($configImg['zoom']['C']['path'].$color->image),
            "data-large_image_width" => $configImg['zoom']['C']['width'],
            "data-large_image_height" => $configImg['zoom']['C']['height']
        );

        if ($configSite->image_positions == 1) {
            if (count($color->positions) > 0) {
                foreach ($color->positions as $position) {
                    $default_gallery[] = array(
                        "single" => urf($configImg['large']['P']['path'].$position->image),
                        "thumbnail" => urf($configImg['thumb']['P']['path'].$position->image),
                        "data-src" => urf($configImg['large']['P']['path'].$position->image),
                        "data-large_image" => urf($configImg['zoom']['P']['path'].$position->image),
                        "data-large_image_width" => $configImg['zoom']['P']['width'],
                        "data-large_image_height" => $configImg['zoom']['P']['height']
                    );
                }
            }
        }




        $att[] = array(
            "attributes" => array(
                "attribute_pa_color" => $color->color,
                "attribute_pa_size" => ""
            ),
            "availability_html" => "",
            "backorders_allowed" => false,
            "dimensions" => "N/A",
            "dimensions_html" => "N/A",
            "display_price" => $price_cash,
            "display_regular_price"=> $price_card,
            "image" => array(
                "title" => "bobbi_chunky_pom_beanie5",
                "caption" => "",
                "url" => urf($configImg['zoom']['C']['path'].$color->image),
                "alt" => "bobbi_chunky_pom_beanie4",
                "src" => urf($configImg['zoom']['C']['path'].$color->image),
                "srcset" => urf($configImg['zoom']['C']['path'].$color->image).
                " ".$configImg['zoom']['C']['width']."w,".urf($configImg['large']['C']['path'].$color->image).
                " ".$configImg['large']['C']['width']."w,".urf($configImg['normal']['C']['path'].$color->image).
                " ".$configImg['normal']['C']['width']."w,".urf($configImg['thumb']['C']['path'].$color->image).
                " ".$configImg['thumb']['C']['width']."w",
                "sizes" => "(max-width: 750px) 100vw, 750px",
                "full_src" => urf($configImg['zoom']['C']['path'].$color->image),
                "full_src_w" => $configImg['zoom']['C']['width'],
                "full_src_h" => $configImg['zoom']['C']['height'],
                "thumb_src" => urf($configImg['thumb']['C']['path'].$color->image),
                "thumb_src_w" => $configImg['thumb']['C']['width'],
                "thumb_src_h" => $configImg['thumb']['C']['height'],
                "src_w" => $configImg['large']['C']['width'],
                "src_h" => $configImg['large']['C']['height']
            ),
            "image_id" => $color->id,
            "is_downloadable" => false,
            "is_in_stock" => true,
            "is_purchasable" => true,
            "is_sold_individually" => "no",
            "is_virtual" => false,
            "max_qty" => "",
            "min_qty" => 1,
            "price_html" => "",
            "sku" => "P18",
            "variation_description" => "",
            "variation_id" => $color->id,
            "variation_is_active" => true,
            "variation_is_visible" => true,
            "weight" => "N/A",
            "weight_html" => "N/A"
        );    }

    $out = array(
        "default_gallery" => $default_gallery
    );

    $data_gallery = json_encode($out);

    $data_variations = json_encode($att);





@endphp
@push('meta')
<link rel="canonical" href="{{route('product', $image->slug)}}" />
<link rel="shortlink" href="{{route('product', $image->slug)}}" />
<meta itemprop="name" content="{{config('app.name')}}">
<meta itemprop="description" content="{{$configKeyword->description}}">
<meta itemprop="image" content="{{urf($configImg['large']['C']['path'].$image->image)}}">
<meta property="og:title" content="{{$product->name.' '.$image->color}}" />
<meta property="og:url" content="{{route('product', $image->slug)}}" />
<meta property="og:image" content="{{urf($configImg['large']['C']['path'].$image->image)}}" />
<meta property="og:image:url" content="{{urf($configImg['large']['C']['path'].$image->image)}}" />
<meta property="og:description" content="{{$configKeyword->description}}" />
<meta property="og:site_name" content="{{config('app.name')}}" />
<meta property="og:type" content="product" />
@endpush
@push('stylesheet')
<link rel="stylesheet" id="photoswipe" href="{{asset('avdesign/plugins/photoswipe/photoswipe.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="photoswipe-default-skin" href="{{asset('avdesign/plugins/photoswipe/default-skin/default-skin.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="white-animated" href="{{asset('avdesign/themes/white/css/product.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="pm-style-css" href="{{asset('avdesign/plugins/pin-maker/css/pm-frontend.css')}}" type="text/css" media="all" />
@endpush
@push('scripts-head')
<script type="text/javascript" src="{{asset('avdesign/plugins/single-product/single-product.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/zoom/jquery.zoom.min.js')}}"></script>
@endpush
@push('styles')
<noscript>
    <style>.woocommerce-product-gallery {opacity: 1 !important;}</style>
</noscript>
@endpush
@push('body')
<body class="product-template-default single single-product postid-{{$product->id}} logged-in woocommerce woocommerce-page yith-wcan-free wpb-js-composer js-comp-ver-5.2.1 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">
@endpush
@section('content')

    <div id="jas-content">
        <div class="jas-wc-single wc-single-1 mb__60">
            <div class="bgbl pt__20 pb__20 pl__15 pr__15 lh__1">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('home.site')}}">Home</a>
                    <i class="fa fa-angle-right"></i><a href="{{route('category', str_slug($product->category.'-'.$product->section))}}">{{$product->category}}</a>
                    <i class="fa fa-angle-right"></i><a href="{{route('category', str_slug($product->section))}}">{{$product->section}}</a>
                    <i class="fa fa-angle-right"></i>{{$product->name}}
                </nav>
            </div>
            <div class="jas-container">
                <div id="product-{{$product->id}}" class="mt__40 post-{{$product->id}} product type-product status-publish has-post-thumbnail product_cat-women product_cat-denim product_cat-dress product_cat-tops product_cat-accessories product_cat-jewellery product_tag-jewellery product_tag-watch product_tag-women first instock shipping-taxable purchasable product-type-variable has-children">
                    <div class="jas-row mb__50">
                        <div class="jas-col-md-6 jas-col-sm-7 jas-col-xs-12 pr">
                            <div class="badge tu tc fs__12 ls__2"></div>
                            <div class="single-product-thumbnail pr left">
                                <div class="p-thumb images woocommerce-product-gallery jas-carousel" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "asNavFor": ".p-nav", "fade":true}'>
                                    {{$gallery}}
                                </div>


                                <div class="p-nav oh jas-carousel" data-slick='{"slidesToShow": 1,"slidesToScroll": 1,"asNavFor": ".p-thumb","arrows": false, "focusOnSelect": true, "vertical": true, "responsive":[{"breakpoint": 736,"settings":{"slidesToShow": 1, "vertical":false}}]}'>
                                    {{$carousel}}
                                </div>


                            </div>
                            @if($configProduct->video == 1 && $product->video != '')
                                <div class="p-video pa">
                                    <a href="{{$product->video}}" class="br__40 pl__30 pr__30 tc db bghp jas-popup-url">
                                        <i class="pe-7s-play pr"></i>Ver Video
                                    </a>
                                </div>
                            @endif
                            @if($configProduct->countdown == 1 && $product->offer == 1)
                                <div class="product-countdown">
                                    <div class="product-info">
                                        <div class="countdown-time pa">
                                            @php
                                                $data = array(
                                                    "day" => "31",
                                                    "month" => "Jan",
                                                    "year" => "2018"
                                                );
                                                $countdown = json_encode($data);

                                            @endphp
                                            <!--
                                            <div class="jas-countdown flex tc" data-time="{{$countdown}}">
                                                <div class="pr"><span class="db cw fs__16 mt__10">50</span><span class="db">Dias</span></div>
                                                <div class="pr"><span class="db cw fs__16 mt__10">3</span><span class="db">hrs</span></div>
                                                <div class="pr"><span class="db cw fs__16 mt__10">10</span><span class="db">mins</span></div>
                                                <div class="pr"><span class="db cw fs__16 mt__10">12</span><span class="db">segs</span></div>
                                            </div>
                                            -->
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="jas-col-md-6 jas-col-sm-5 jas-col-xs-12">


                            <div class="summary entry-summary">
                                <h1 class="product_title entry-title">{{$product->name}}</h1>
                                <p>Ref: <span id="color_code">{{$image->code}}</span></p>
                                <div class="flex between-xs middle-xs price-review">
                                    <p class="price">
                                        À Vista
                                        <span class="cash">{{setReal($price_card)}}</span><br>
                                        Parcelado
                                        <span class="card">{{setReal($price_card)}}</span>
                                    </p>
                                </div>
                                @if($image->description != '')
                                    <div class="woocommerce-product-details__short-description">
                                        <p>{{$image->description}}</p>
                                    </div>
                                @endif

                                <div class="btn-atc atc-popup">
                                    <form class="variations_form cart" method="post" enctype="multipart/form-data" data-product_id="{{$product->id}}" data-galleries="{{$data_gallery}}" data-product_variations="{{$data_variations}}">
                                        <div class="variations">
                                            <div class="swatch is-color">
                                                <h4 class="swatch__title">Cores Disponíveis</h4>
                                                <ul class="swatch__list is-flex" data-attribute="pa_color">
                                                    @foreach ($product->images as $color)
                                                        <li data-variation="{{$color->color}}" data-image-id="{{$color->id}}" data-grid="color_sizes" class="swatch__list--item is-relative">
                                                            <span class="swatch__value" style="background-color:{{$color->html}}; width:30px;height:30px;"></span>
                                                            <span class="swatch__tooltip is-absolute is-block">{{$color->color}}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>

                                                <div class="value">
                                                    <select id="pa_color" class="" name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">
                                                        <option value="">Escolha uma Cor</option>
                                                        @foreach ($product->images as $color)
                                                            <option value="{{$color->color}}">{{$color->color}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div id="color_sizes" class="swatch is-label">

                                                <h4 class="swatch__title">Grade</h4>
                                                <ul class="swatch__list is-flex" data-attribute="pa_size">
                                                    @foreach($image->grids as $grd)
                                                        @if($loop->index == 0)
                                                            <li data-variation="{{$grd->grid}}" data-image-id="" class="swatch__list--item is-relative is-selected">
                                                                <span class="swatch__value">{{$grd->grid}}</span>
                                                                <span class="swatch__tooltip is-absolute is-block">{{$grd->grid}}</span>
                                                            </li>
                                                        @else
                                                            <li data-variation="{{$grd->grid}}" data-image-id="" class="swatch__list--item is-relative">
                                                                <span class="swatch__value">{{$grd->grid}}</span>
                                                                <span class="swatch__tooltip is-absolute is-block">{{$grd->grid}}</span>
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                </ul>

                                                <div class="value">
                                                    <select id="pa_size" class="" name="attribute_pa_size" data-attribute_name="attribute_pa_size" data-show_option_none="yes">
                                                        <option value="">Escolha uma Tamanho</option>
                                                        @foreach($image->grids as $grd)
                                                            @if($loop->index == 0)
                                                                <option value="{{$grd->grid}}" selected>{{$grd->grid}}</option>
                                                            @else
                                                                <option value="{{$grd->grid}}">{{$grd->grid}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <a class="reset_variations" href="#">Limpar</a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="single_variation_wrap">
                                            <div class="woocommerce-variation single_variation"></div>
                                            <div class="woocommerce-variation-add-to-cart variations_button">
                                                <div class="quantity pr fl mr__10">
                                                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text tc" size="4" />
                                                    <div class="qty tc">
                                                        <a class="plus db cb pa" href="javascript:void(0);">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                        <a class="minus db cb pa" href="javascript:void(0);">
                                                            <i class="fa fa-minus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <button type="submit" class="single_add_to_cart_button button alt">Adicionar</button>

                                                <input type="hidden" name="add-to-cart" value="{{$product->id}}" />
                                                <input type="hidden" name="product_id" value="{{$product->id}}" />
                                                <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                            </div>
                                        </div>

                                        <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-{{$product->id}}">
                                            <div class="yith-wcwl-add-button hide" style="display:none;">
                                                <a href="{{route('wishlist')}}" data-product-id="{{$product->id}}" data-product-type="variable" class="add_to_wishlist cw">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <i class="fa fa-spinner fa-pulse ajax-loading pa" style="visibility:hidden"></i>
                                            </div>
                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <a class="chp" href="{{route('wishlist')}}/">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                            <div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
                                                <a href="{{route('wishlist')}}" class="chp">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="extra-link mt__25 fwsb">
                                        <a class="cd chp jas-magnific-image" href="{{asset('assets/imagens/popups/produto-aviso.png')}}">Como Comprar</a>
                                        <a data-type="shipping-return" class="jas-wc-help cd chp ml__20" href="#">Duvidas</a>
                                    </div>
                                </div>
                                @if($product->description != '')
                                    <div class="product_meta">
                                        <span class="posted_in">{{$product->description}}</span>
                                    </div>
                                @endif
                                <!-- include('products.includes.packages-1') -->
                                <!-- include('products.includes.social-share-1') -->
                            </div>
                            <!-- .summary -->

                        </div>
                    </div>
                    <!-- include('products.includes.tabs-1') -->
                    <!-- include('products.includes.related-1') -->
                    <meta itemprop="url" content="http://janstudio.net/claue/demo/product/cuffed-beanie/" />
                </div>
                <!-- #product-{{$product->id}} -->
            </div>
        </div>
    </div>

@endsection
@push('scripts')


@php
    $offers[] = array(
        "@type" => "Offer",
        "priceCurrency" => "BRS",
        "availability" => "https://schema.org/InStock",
        "sku" => "P15",
        "image" => urf($configImg['large']['C']['path'].$image->image),
        "description" => $configKeyword->description,
        "seller" => array(
            "@type" => "Organization",
            "name" => config('app.name'),
            "url" => route('home')
        ),
        "price" => $price_cash

    );

    $itemListElement[] = array(
        "@type" => "ListItem",
        "position" => "1",
        "item" => array(
            "name" => "Home",
            "@id" => route('home')
        )
    );

    $itemListElement[] = array(
        "@type" => "ListItem",
        "position" => "2",
        "item" => array(
            "name" => "Accessories",
            "@id" => route('category', str_slug($product->category.'-'.$product->section))
        )
    );

    $itemListElement[] = array(
        "@type" => "ListItem",
        "position" => "3",
        "item" => array(
            "name" => $product->name,
        )
    );

    $graph[] = array(
        "@context" => "https://schema.org/",
        "@type" => "BreadcrumbList",
        "itemListElement" => $itemListElement
    );

    $graph[] = array(
        "@context" => "https://schema.org/",
        "@type" => "Product",
        "@id" => route('product', $image->slug),
        "url" => route('product', $image->slug),
        "name" => $product->name,
        "offers" => $offers
    );


@endphp
<script type="application/ld+json">{!! json_encode([
    "@graph" =>  $graph
]) !!};</script>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
    PhotoSwipe keeps only 3 of them in the DOM to save memory.
    Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" aria-label="Share"></button>

                <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>

            <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>


    </div>

</div>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_single_product_params = {
        "i18n_required_rating_text": "Please select a rating",
        "review_rating_required": "yes",
        "flexslider": {
            "rtl": false,
            "animation": "slide",
            "smoothHeight": true,
            "directionNav": false,
            "controlNav": "thumbnails",
            "slideshow": false,
            "animationSpeed": 500,
            "animationLoop": false
        },
        "zoom_enabled": "",
        "photoswipe_enabled": "1",
        "photoswipe_options": {
            "shareEl": false,
            "closeOnScroll": false,
            "history": false,
            "hideAnimationDuration": 0,
            "showAnimationDuration": 0
        },
        "flexslider_enabled": ""
    };
    /* ]]> */
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/claue\/demo\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/claue\/demo\/product\/cuffed-beanie\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('avdesign/includes/js/comment-reply.min.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/pin-maker/js/pm-frontend.js')}}"></script>
<script type="text/javascript" src="{{asset('avdesign/plugins/js_composer/js/js_composer_front.min.js')}}"></script>
@endpush