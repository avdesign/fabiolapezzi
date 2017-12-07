<header id="jas-header" class="header-3" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
    <div class="header__top bgbl pl__15 pr__15">
        <div class="jas-row middle-xs">
            <div class="jas-col-md-2 jas-col-sm-6 jas-col-xs-12 flex start-md start-sm center-xs">
                <div class="jas-branding ts__05">
                    <a class="db" href="{{route('home')}}">
                        <img class="regular-logo" src="{{asset('assets/imagens/logo/footer-logo.png')}}" width="120" alt="{{config('app.name')}}" />
                        <img class="retina-logo" src="{{asset('assets/imagens/logo/footer-logo.png')}}" width="120" alt="{{config('app.name')}}" />
                    </a>
                </div>

            </div>
            <div class="jas-col-md-8 hidden-sm tc">
                <div class="header-text">
                    <h3>
                        <span class="cp">Os calçados mais quentes de um futuro não tão distante estão aqui.</span>
                    </h3>
                </div>
            </div>
            <div class="jas-col-md-2 jas-col-sm-6 jas-col-xs-12 flex end-lg end-sm center-xs">
                <div class="jas-socials">
                    <a class="dib br__50 tc facebook" href="https://www.facebook.com/fabiola.calcados" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="dib br__50 tc instagram" href="https://www.instagram.com/fabiolapezzi/" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="header__mid pl__30 pr__30">
        <div class="jas-row middle-xs">
            <div class="hidden-md visible-sm jas-col-sm-3 jas-col-xs-3">
                <a href="javascript:void(0);" class="jas-push-menu-btn">
                    <img src="{{asset('assets/avd-content/themes/avdesign/assets/images/icons/menu-mobile.svg')}}" width="25" height="22" alt="Menu" />
                    MENU
                </a>
            </div>
            <div class="jas-col-md-2 jas-col-sm-6 jas-col-xs-6 start-md center-sm center-xs">

                <div class="jas-branding ts__05">
                    <a class="db" href="{{route('home')}}">
                        <img class="regular-logo" src="{{asset('assets/avd-content/themes/avdesign/assets/images/logo.png')}}" width="200" height="25" alt="{{config('app.name')}}" />
                        <img class="retina-logo" src="{{asset('assets/avd-content/themes/avdesign/assets/images/logo-2x.png')}}" width="200" height="25" alt="{{config('app.name')}}" />
                    </a>
                </div>

            </div>
            <div class="jas-col-md-8 hidden-sm">
                <nav class="jas-navigation flex center-xs" role="navigation">
                    <ul id="jas-main-menu" class="jas-menu clearfix">

                        <li id="menu-item-112" class="new menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-112">
                            <a href="{{route('home.site')}}">LOOKBOOK</a>
                            <ul class="sub-menu">
                                <li id="menu-item-4680" class="new menu-item menu-item-type-post_type menu-item-object-page menu-item-4680">
                                    <a href="{{route('home')}}">PRIMAVERA/VERÃO</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-3585" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3585">
                            <a href="{{route('register')}}">Cadastro</a>
                        </li>
                        <li id="menu-item-3586" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3585">
                            <a href="{{route('contact')}}">Contato</a>
                        </li>
                        <li id="menu-item-3577" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3577">
                            <a href="{{route('dashboard')}}"><span>ÁREA DO REVENDEDOR</span></a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="jas-col-md-2 jas-col-sm-2 jas-col-xs-2 flex end-xs">
                <div class="jas-action flex end-xs middle-xs">
                    <a class="sf-open cb chp hidden-xs" href="javascript:void(0);"><i class="pe-7s-search"></i></a>
                    <div class="jas-my-account hidden-xs ts__05 pr"><a class="cb chp db" href="http://janstudio.net/gecko/fashion/my-account/"><i class="pe-7s-user"></i></a>
                        <ul class="pa tc">
                            <li><a class="db cg chp" href="http://janstudio.net/gecko/fashion/my-account/">Login / Register</a></li>
                        </ul>
                    </div><a class="cb chp hidden-xs" href="http://janstudio.net/gecko/fashion/wishlist/"><i class="pe-7s-like"></i></a>
                    <div class="jas-icon-cart pr">
                        <a class="cart-contents pr cb chp db" href="#" title="View your shopping cart">
                            <i class="pe-7s-shopbag"></i>
                            <span class="pa count bgb br__50 cw tc">1</span>
                        </a>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="jas-canvas-menu jas-push-menu">
        <h3 class="mg__0 tc cw bgb tu ls__2"><i class="close-menu pe-7s-close pa"></i></h3>
        <div id="jas-mobile-menu" class="menu-main-menu-container">
            <ul id="menu-main-menu" class="menu">
                <li class="new menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub">
                    <a href="{{route('home.site')}}"><span>LOOKBOOK</span></a>
                    <ul>
                        <li class="new menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="{{route('home')}}">
                                <span>PRIMAVERA/VERÃO 2018</span></a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{route('register')}}"><span>Cadastro</span></a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{route('contact')}}"><span>Contato</span></a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{route('login')}}"><span>ÁREA DO REVENDEDOR</span></a>
                </li>
            </ul>
        </div>
    </div>
</header>