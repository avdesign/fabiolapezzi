<header id="jas-header" class="header-3" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
    <!-- .header__top -->
    @include('headers.tops.top-1')

    <div class="header__mid pl__15 pr__15">
        <div class="jas-row middle-xs">
            <div class="hide-md visible-sm visible-xs jas-col-sm-4 jas-col-xs-3 flex start-md flex">
                <a href="javascript:void(0);" class="jas-push-menu-btn hide-md visible-sm visible-xs">
                    <img src="http://janstudio.net/claue/demo/wp-content/themes/claue/assets/images/icons/hamburger-black.svg" width="30" height="16" alt="Menu" /> </a>
            </div>
            <div class="jas-col-md-2 jas-col-sm-4 jas-col-xs-6 start-md center-sm center-xs">
                <div class="jas-branding ts__05">
                    <a class="db" href="{{route('home.site')}}">
                        <img class="regular-logo" src="{{asset('assets/imagens/logo/exclusive.png')}}" width="150" alt="{{config('app.nmae')}}" />
                        <img class="retina-logo" src="{{asset('assets/imagens/logo/exclusive.png')}}"  width="150" alt="{{config('app.nmae')}}" />
                    </a>
                </div>
            </div>
            <div class="jas-col-md-8 hidden-sm hidden-xs">
                <nav class="jas-navigation flex center-xs">
                    <ul id="jas-menu" class="jas-menu clearfix">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub current-menu-ancestor current_page_ancestor">
                            <a href="{{route('home.site')}}"><span>HOME</span></a>
                        </li>

                        @foreach($sections as $section)
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                <a href="javacript:void(0)">{{$section->name}}</a>

                                <ul class="sub-menu">
                                    @foreach($section->categories as $category)
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                        <a href="{{route('category', $category->slug)}}">{{$category->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                        <li class="sale menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="javacript:void(0)"> BLACK FRIDAY </a>
                        </li>
                        <li class="menu-item menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="{{route('register')}}"> CADASTRO </a>
                        </li>
                        <li class="menu-item menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="{{route('contact')}}"> CONTATO </a>
                        </li>
                        <li class="menu-item menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="{{route('dashboard')}}"> ÁREA DO CLIENTE </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="jas-col-md-2 jas-col-sm-4 jas-col-xs-3">
                <div class="jas-action flex end-xs middle-xs">
                    <a class="sf-open cb chp hidden-xs" href="javascript:void(0);"><i class="pe-7s-search"></i></a>
                    <div class="jas-my-account hidden-xs ts__05 pr">
                        <a class="cb chp db" href="{{route('dashboard')}}"><i class="pe-7s-user"></i></a>
                        <ul class="pa tc">
                            <li><a class="db cg chp" href="{{route('login')}}">Login / Cadastro</a></li>
                        </ul>
                    </div>
                    <a class="cb chp hidden-xs" href="{{route('wishlist')}}"><i class="pe-7s-like"></i></a>
                    <div class="jas-icon-cart pr">
                        <a class="cart-contents pr cb chp db" href="#" title="Veja sua ordem">
                            <i class="pe-7s-shopbag"></i>
                            <span class="pa count bgb br__50 cw tc">1</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .header__mid -->
    <form class="header__search w__100 dn pf" role="search" method="get" action="http://janstudio.net/claue/demo/" itemprop="potentialAction" itemscope="itemscope" itemtype="http://schema.org/SearchAction">
        <div class="pa">
            <input class="w__100 jas-ajax-search" type="text" name="s" placeholder="Search for..." />
            <input type="hidden" name="post_type" value="product">
        </div>
        <a id="sf-close" class="pa" href="#"><i class="pe-7s-close"></i></a>
    </form>
    <!-- #header__search -->

    <div class="jas-canvas-menu jas-push-menu">
        <h3 class="mg__0 tc cw bgb tu ls__2">Menu <i class="close-menu pe-7s-close pa"></i></h3>
        <div class="hide-md visible-sm visible-xs center-xs mt__30 flex tc">
            <div class="jas-currency dib pr cg"><span class="current dib">USD<i class="fa fa-angle-down ml__5"></i></span>
                <ul class="pa ts__03 bgbl">
                    <li><a class="currency-item cg db" href="javascript:void(0);" data-currency="EUR">EUR</a></li>
                    <li><a class="currency-item cg db" href="javascript:void(0);" data-currency="USD">USD</a></li>
                </ul>
            </div>
        </div>
        <div class="jas-action flex center-xs middle-xs hide-md hidden-sm visible-xs mt__30">
            <a class="sf-open cb chp" href="javascript:void(0);"><i class="pe-7s-search"></i></a>
            <a class="cb chp db jas-my-account" href="http://janstudio.net/claue/demo/my-account/"><i class="pe-7s-user"></i></a><a class="cb chp wishlist-icon" href="http://janstudio.net/claue/demo/wishlist/"><i class="pe-7s-like"></i></a> </div>
        <!-- .jas-action -->
        <div id="jas-mobile-menu" class="menu-main-menu-container">
            <ul id="menu-main-menu-1" class="menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current_page_ancestor menu-item-has-children has-sub">
                    <a href="{{route('home')}}"><span>Home</span></a>
                </li>
                @foreach($sections as $section)
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub">
                        <a href="javacript:void(0)">{{$section->name}}</a>
                        <ul>
                            @foreach($section->categories as $category)
                                <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                    <span><a href="{{route('category', $category->slug)}}">{{$category->name}}</a></span>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                <li class="sale menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="javascript:void(0)"><span>BLACK FRIDAY</span></a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{route('register')}}"><span>CADASTRO</span></a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{route('contact')}}"><span>CONTATO</span></a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{route('dashboard')}}"><span>ÁREA DO CLIENTE</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- .jas-canvas-menu -->

    <div class="jas-mini-cart jas-push-menu">
        <div class="jas-mini-cart-content">
            <h3 class="mg__0 tc cw bgb tu ls__2">Minha Ordem <i class="close-cart pe-7s-close pa"></i></h3>
            <div class="widget_shopping_cart_content"></div>
        </div>
    </div>
    <!-- .jas-mini-cart -->
</header>
