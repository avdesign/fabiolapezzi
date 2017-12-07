<header id="jas-header" class="header-2" itemscope="itemscope" itemtype="http://schema.org/WPHeader" style="height:110px">
    <!-- .header__top -->
    @include('headers.tops.top-1')
    <div class="header__mid pl__15 pr__15">
        <div class="jas-row middle-xs">
            <div class="jas-col-md-2 jas-col-sm-4 jas-col-xs-3 flex start-md flex">
                <a href="javascript:void(0);" class="jas-push-menu-btn hide-md visible-sm visible-xs">
                    <img src="{{asset('assets/themes/white/images/icons/menu-mobile.svg')}}" width="30" height="16" alt="Menu">
                </a>

                <div class="hidden-xs hidden-sm">
                    <div class="jas-social">
                        <a class="dib br__50 tc facebook" href="https://www.facebook.com/fabiola.calcados" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="dib br__50 tc instagram" href="https://www.instagram.com/fabiolapezzi/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="jas-col-md-8 jas-col-sm-4 jas-col-xs-6 flex middle-xs tc">
                <nav class="jas-navigation jas-col-md-5 hidden-sm hidden-xs flex end-xs pd__0">
                    <ul id="jas-left-menu" class="jas-menu clearfix">
                        <li id="menu-item-5385" class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="{{route('contact')}}">CONTATO</a>
                        </li>
                        <li id="menu-item-5386" class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="{{route('register')}}">CADASTRO</a>
                        </li>
                    </ul>
                </nav>
                <!-- .jas-navigation -->
                <div class="jas-col-md-2 jas-col-sm-12 jas-col-xs-12">
                    <div class="jas-branding ts__05">
                        <a class="db" href="http://janstudio.net/claue/demo/">
                            <img class="regular-logo" src="{{asset('assets/imagens/logo/logo-header')}}" width="150" height="29" alt="{{config('app.name')}}">
                            <img class="retina-logo" src="{{asset('assets/imagens/logo/footer-logo')}}" width="96" alt="{{config('app.name')}}">
                        </a>
                    </div>
                </div>
                <nav class="jas-navigation jas-col-md-5 hidden-sm hidden-xs pd__0">
                    <ul id="jas-right-menu" class="jas-menu clearfix">
                        <li id="menu-item-5313" class="sale menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/sale/">Sale</a></li>
                        <li id="menu-item-4227" class="menu-item menu-item-type-post_type_archive menu-item-object-portfolio menu-item-has-children"><a href="http://janstudio.net/claue/demo/portfolio/">Portfolio</a>
                            <ul class="sub-menu">
                                <li id="menu-item-4238" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/portfolio-2-columns/">Portfolio 2 Columns</a></li>
                                <li id="menu-item-4237" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/portfolio-3-columns/">Portfolio 3 Columns</a></li>
                                <li id="menu-item-4236" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/portfolio-4-columns/">Portfolio 4 Columns</a></li>
                                <li id="menu-item-4239" class="menu-item menu-item-type-post_type menu-item-object-portfolio"><a href="http://janstudio.net/claue/demo/portfolio/white-sport-shoes/">Portfolio Single With Shop</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-4229" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="http://janstudio.net/claue/demo/blog/">Blog</a>
                            <ul class="sub-menu">
                                <li id="menu-item-4286" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/blog/">Grid Layout</a></li>
                                <li id="menu-item-5568" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://janstudio.net/claue/demo/blog/?layout=masonry">Masonry Layout</a></li>
                                <li id="menu-item-4240" class="hot menu-item menu-item-type-post_type menu-item-object-post"><a href="http://janstudio.net/claue/demo/spring-summer-trending-2017/">Single Post With Shop</a></li>
                                <li id="menu-item-5614" class="menu-item menu-item-type-post_type menu-item-object-post"><a href="http://janstudio.net/claue/demo/story-of-a-girl/">Single Blog Post with Instagram Shop</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-5385" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/size-guide/">Size Guide</a></li>
                    </ul>
                </nav>
                <!-- .jas-navigation -->
            </div>
            <div class="jas-col-md-2 jas-col-sm-4 jas-col-xs-3 flex end-xs">

                <div class="jas-action flex end-xs middle-xs jas-col-md-3 jas-col-xs-3 pd__0">
                    <a class="sf-open cb chp hidden-xs" href="javascript:void(0);"><i class="pe-7s-search"></i></a>
                    <div class="jas-my-account hidden-xs ts__05 pr"><a class="cb chp db" href="http://janstudio.net/claue/demo/my-account/"><i class="pe-7s-user"></i></a>
                        <ul class="pa tc">
                            <li><a class="db cg chp" href="http://janstudio.net/claue/demo/my-account/">Dashboard</a></li>
                            <li><a class="db cg chp" href="http://janstudio.net/claue/demo/orders-tracking/">Order Tracking</a></li>
                            <li><a class="db cg chp" href="http://janstudio.net/claue/demo/wp-login.php?action=logout&amp;_wpnonce=3e66d0acc4">Logout</a></li>
                        </ul>
                    </div><a class="cb chp hidden-xs" href="http://janstudio.net/claue/demo/wishlist/"><i class="pe-7s-like"></i></a>
                    <div class="jas-icon-cart pr">
                        <a class="cart-contents pr cb chp db" href="#" title="View your shopping cart">
                            <i class="pe-7s-shopbag"></i>
                            <span class="pa count bgb br__50 cw tc">4</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- .jas-row -->
    </div>
    <!-- .header__mid -->
    <form class="header__search w__100 dn pf" role="search" method="get" action="http://janstudio.net/claue/demo/" itemprop="potentialAction" itemscope="itemscope" itemtype="http://schema.org/SearchAction">
        <div class="pa">
            <input class="w__100 jas-ajax-search ui-autocomplete-input" type="text" name="s" placeholder="Search for..." autocomplete="off">
            <input type="hidden" name="post_type" value="product">
        </div>
        <a id="sf-close" class="pa" href="#"><i class="pe-7s-close"></i></a>
    </form>
    <!-- #header__search -->

    <div class="jas-canvas-menu jas-push-menu">
        <h3 class="mg__0 tc cw bgb tu ls__2">Menu <i class="close-menu pe-7s-close pa"></i></h3>
        <div class="hide-md visible-sm visible-xs mt__30 center-xs flex tc">
            <div class="jas-currency dib pr cg"><span class="current dib">USD<i class="fa fa-angle-down ml__5"></i></span>
                <ul class="pa ts__03 bgbl">
                    <li><a class="currency-item cg db" href="javascript:void(0);" data-currency="EUR">EUR</a></li>
                    <li><a class="currency-item cg db" href="javascript:void(0);" data-currency="USD">USD</a></li>
                </ul>
            </div>
        </div>
        <div class="jas-action flex center-xs middle-xs hide-md hidden-sm visible-xs mt__10">
            <a class="sf-open cb chp" href="javascript:void(0);"><i class="pe-7s-search"></i></a>
            <a class="cb chp db jas-my-account" href="http://janstudio.net/claue/demo/my-account/"><i class="pe-7s-user"></i></a><a class="cb chp wishlist-icon" href="http://janstudio.net/claue/demo/wishlist/"><i class="pe-7s-like"></i></a> </div>
        <!-- .jas-action -->
        <div id="jas-mobile-menu" class="menu-main-menu-container">
            <ul id="menu-main-menu-1" class="menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4082 current_page_item current-menu-ancestor current_page_ancestor menu-item-has-children active has-sub"><a href="http://janstudio.net/claue/demo/"><span>Demo</span></a>
                    <ul>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub"><a href="#"><span>Homepages</span></a>
                            <ul>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/home-2/"><span>Home 2</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/home-3/"><span>Home 3</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/home-4/"><span>Home 4</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/home-5/"><span>Home 5</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/home-6/"><span>Home 6</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/home-7/"><span>Home 7</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/home-8/"><span>Home 8</span></a></li>
                                <li class="new menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/home-instagram-shop/"><span>Home Instagram Shop</span></a></li>
                            </ul>
                            <span class="holder"></span></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children has-sub"><a href="#"><span>Header Layouts</span></a>
                            <ul>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://janstudio.net/claue/demo/?header=1"><span>Header 1</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item active"><a href="http://janstudio.net/claue/demo/?header=2"><span>Header 2</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://janstudio.net/claue/demo/?header=3"><span>Header 3</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://janstudio.net/claue/demo/?header=4"><span>Header 4</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://janstudio.net/claue/demo/home-6/?header=5"><span>Header 5</span></a></li>
                            </ul>
                            <span class="holder"></span></li>
                    </ul>
                    <span class="holder"></span></li>
                <li class="new menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a href="http://janstudio.net/claue/demo/shop/"><span>Shop</span></a>
                    <ul>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://janstudio.net/claue/demo/shop/?layout=grid"><span>Grid Layout</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://janstudio.net/claue/demo/shop/?layout=metro"><span>Metro Layout</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://janstudio.net/claue/demo/shop/?layout=masonry"><span>Masonry Layout</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/shop-full-width-layout/"><span>Full Width Layout</span></a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="http://janstudio.net/claue/demo/product-category/women/"><span>Left Sidebar</span></a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="http://janstudio.net/claue/demo/product-category/accessories/"><span>Right Sidebar</span></a></li>
                    </ul>
                    <span class="holder"></span></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-has-children has-sub"><a href="http://janstudio.net/claue/demo/product/sweatshirt-in-geometric-print/"><span>Product</span></a>
                    <ul>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub"><a href="#"><span>Product Detail Features</span></a>
                            <ul>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/cuffed-beanie/"><span>Product With  Color Swatch</span></a></li>
                                <li class="hot menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/mercury-tee/"><span>Product With Gallery Swatch</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/cluse-la-boheme-rose-gold/"><span>Product With Images Swatch</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/pink-leather-watch/"><span>Product with 360 video</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/leather-white-trainers/"><span>External/Affiliate Product</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/men-clothing-combo/"><span>Grouped Product</span></a></li>
                                <li class="new menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/short-sleeved-hoodie-with-step-hem/"><span>Product with bundle</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/cyan-boheme/"><span>Product full width layout</span></a></li>
                            </ul>
                            <span class="holder"></span></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-has-children has-sub"><a href="http://janstudio.net/claue/demo/product/pink-leather-watch/"><span>Product Detail Layout</span></a>
                            <ul>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/brown-sneaker-shoes/"><span>Product Detail Layout 1</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/calvin-klein-logo-sweatpants/"><span>Product Detail Layout 2</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/sweatshirt-in-geometric-print/"><span>Product Detail Layout 3</span></a></li>
                                <li class="hot menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/premium-shoes-clean-package/"><span>Product Detail Layout 4</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/herschel-retreat-backpack/"><span>Product with thumb at bottom</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/skinny-jeans-in-black/"><span>Product with thumb on right</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/asos-ridley-high-waist/"><span>Product with thumb outside</span></a></li>
                            </ul>
                            <span class="holder"></span></li>
                    </ul>
                    <span class="holder"></span></li>
                <li class="sale menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/sale/"><span>Sale</span></a></li>
                <li class="menu-item menu-item-type-post_type_archive menu-item-object-portfolio menu-item-has-children has-sub"><a href="http://janstudio.net/claue/demo/portfolio/"><span>Portfolio</span></a>
                    <ul>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/portfolio-2-columns/"><span>Portfolio 2 Columns</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/portfolio-3-columns/"><span>Portfolio 3 Columns</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/portfolio-4-columns/"><span>Portfolio 4 Columns</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-portfolio"><a href="http://janstudio.net/claue/demo/portfolio/white-sport-shoes/"><span>Single Portflio With Shop</span></a></li>
                    </ul>
                    <span class="holder"></span></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a href="http://janstudio.net/claue/demo/lookbook/"><span>Lookbook</span></a>
                    <ul>
                        <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="http://janstudio.net/claue/demo/product/leather-white-trainers/"><span>Lookbook in product</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-post"><a href="http://janstudio.net/claue/demo/the-easiest-way-to-break-out-on-top/"><span>Lookbook in slngle blog post</span></a></li>
                    </ul>
                    <span class="holder"></span></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a href="http://janstudio.net/claue/demo/blog/"><span>Blog</span></a>
                    <ul>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://janstudio.net/claue/demo/blog/"><span>Grid Layout</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://janstudio.net/claue/demo/blog/?layout=masonry"><span>Masonry Layout</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://janstudio.net/claue/demo/blog/?sidebar=left"><span>Left Sidebar</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-post"><a href="http://janstudio.net/claue/demo/spring-summer-trending-2017/"><span>Single Post with Product Listing</span></a></li>
                        <li class="new menu-item menu-item-type-post_type menu-item-object-post"><a href="http://janstudio.net/claue/demo/story-of-a-girl/"><span>Single Post with Instagram Shop</span></a></li>
                    </ul>
                    <span class="holder"></span></li>
            </ul>
        </div>
        <div class="hidden-md visible-sm visible-xs tc mt__20 mb__30">
            <div class="jas-social"><a class="dib br__50 tc facebook" href="https://www.facebook.com/JanStudio-527963834074920/" target="_blank"><i class="fa fa-facebook"></i></a><a class="dib br__50 tc twitter" href="https://twitter.com/jan_studio" target="_blank"><i class="fa fa-twitter"></i></a><a class="dib br__50 tc google-plus" href="https://plus.google.com/u/1/102811781810668807583" target="_blank"><i class="fa fa-google-plus"></i></a><a class="dib br__50 tc pinterest" href="https://www.pinterest.com/janstudio16/" target="_blank"><i class="fa fa-pinterest"></i></a><a class="dib br__50 tc instagram" href="https://www.instagram.com/jsfashionstock/" target="_blank"><i class="fa fa-instagram"></i></a></div>
        </div>
    </div>
    <!-- .jas-canvas-menu -->

    <div class="jas-mini-cart jas-push-menu">
        <div class="jas-mini-cart-content">
            <h3 class="mg__0 tc cw bgb tu ls__2">Minha Ordem <i class="close-cart pe-7s-close pa"></i></h3>
            <div class="widget_shopping_cart_content">

                <ul class="cart_list product_list_widget ">

                    <li class="mini_cart_item">
                        <a href="http://janstudio.net/claue/demo/cart/?remove_item=ee39e503b6bedf0c98c388b7e8589aca&amp;_wpnonce=4c42a54a6a" class="remove" title="Remove this item" data-product_id="4929" data-product_sku="">×</a>
                        <a href="http://janstudio.net/claue/demo/product/denim-shell-top-with-ruffle-front/">
                            <img width="80" height="102" src="//janstudio.net/claue/demo/wp-content/uploads/2016/09/p6-1-80x102.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//janstudio.net/claue/demo/wp-content/uploads/2016/09/p6-1-80x102.jpg 80w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p6-1-118x150.jpg 118w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p6-1-235x300.jpg 235w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p6-1-768x980.jpg 768w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p6-1-803x1024.jpg 803w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p6-1-370x472.jpg 370w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p6-1.jpg 870w" sizes="(max-width: 80px) 100vw, 80px">Denim Shell Top with Ruffle Front&nbsp; </a>

                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>56.00</span>
                        </span>
                    </li>
                    <li class="mini_cart_item">
                        <a href="http://janstudio.net/claue/demo/cart/?remove_item=2c27a260f16ad3098393cc529f391f4a&amp;_wpnonce=4c42a54a6a" class="remove" title="Remove this item" data-product_id="5006" data-product_sku="">×</a>
                        <a href="http://janstudio.net/claue/demo/product/calvin-klein-logo-sweatpants/">
                            <img width="160" height="215" src="//janstudio.net/claue/demo/wp-content/uploads/2016/10/ck-1-160x215.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">Calvin Klein Logo Sweatpants&nbsp; </a>

                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>35.00</span>
                        </span>
                    </li>
                    <li class="mini_cart_item">
                        <a href="http://janstudio.net/claue/demo/cart/?remove_item=d1942a3ab01eb59220e2b3a46e7ef09d&amp;_wpnonce=4c42a54a6a" class="remove" title="Remove this item" data-product_id="4920" data-product_sku="">×</a>
                        <a href="http://janstudio.net/claue/demo/product/asos-ridley-high-waist/">
                            <img width="80" height="102" src="//janstudio.net/claue/demo/wp-content/uploads/2016/09/p1-1-80x102.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//janstudio.net/claue/demo/wp-content/uploads/2016/09/p1-1-80x102.jpg 80w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p1-1-118x150.jpg 118w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p1-1-235x300.jpg 235w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p1-1-768x980.jpg 768w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p1-1-803x1024.jpg 803w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p1-1-370x472.jpg 370w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p1-1.jpg 870w" sizes="(max-width: 80px) 100vw, 80px">ASOS Ridley High Waist&nbsp; </a>

                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>36.00</span>
                        </span>
                    </li>
                    <li class="mini_cart_item">
                        <a href="http://janstudio.net/claue/demo/cart/?remove_item=250b164d84ea39a488422da8500786e6&amp;_wpnonce=4c42a54a6a" class="remove" title="Remove this item" data-product_id="5111" data-product_sku="">×</a>
                        <a href="http://janstudio.net/claue/demo/product/pink-leather-watch/">
                            <img width="80" height="102" src="//janstudio.net/claue/demo/wp-content/uploads/2016/09/p2-1-80x102.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//janstudio.net/claue/demo/wp-content/uploads/2016/09/p2-1-80x102.jpg 80w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p2-1-118x150.jpg 118w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p2-1-235x300.jpg 235w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p2-1-768x980.jpg 768w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p2-1-803x1024.jpg 803w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p2-1-370x472.jpg 370w, //janstudio.net/claue/demo/wp-content/uploads/2016/09/p2-1.jpg 870w" sizes="(max-width: 80px) 100vw, 80px">Pink Leather Watch&nbsp; </a>

                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>100.00</span>
                        </span>
                    </li>

                </ul>
                <!-- end product list -->

                <p class="total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>227.00</span>
                </p>

                <p class="buttons">
                    <a href="http://janstudio.net/claue/demo/cart/" class="button wc-forward">View cart</a><a href="http://janstudio.net/claue/demo/checkout/" class="button checkout wc-forward">Checkout</a> </p>

            </div>
        </div>
    </div>
    <!-- .jas-mini-cart -->
</header>