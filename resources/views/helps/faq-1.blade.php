@extends('layouts.template-1')
@push('title')
<title>Endereço de Entrega {{config('app.name')}} {{$configKeyword->description}} </title>
<meta name="description" content="{{$configKeyword->description}} , {{$configKeyword->genders}}">
<meta name="keywords" content="{{$configKeyword->keywords}},{{$configKeyword->categories}},{{$configKeyword->genders}}">
@endpush
@push('styles')
<style id='jas-gecko-style-inline-css' type='text/css'>.jas-branding{max-width:200px;margin:auto}.header-6 .header__mid,.header-7{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}.header-6 .header__mid:before{content:"";position:absolute;background:rgba(255,255,255,.85);left:0;top:0;width:100%;height:100%;z-index:0}.header-6 .header__mid .jas-branding,.header-7 .jas-branding{position:relative}.jas-portfolio .page-head{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}.footer__top{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}body,.f__lato{font-family:"Lato";font-weight:400;font-size:14px;background-color:#fff;color:#999}h1,h2,h3,h4,h5,h6,.f__mont{font-family:"Montserrat";font-weight:400}h1,h2,h3,h4,h5,h6{color:#4d5959}h1{font-size:50px}h2{font-size:30px}h3{font-size:20px}h4{font-size:16px}h5{font-size:14px}h6{font-size:12px}a,a:hover,a:active,a.button-o,input.button-o,button.button-o,.cp,.chp:hover,.header-7 .jas-socials a,.header__top .jas-action a:hover,.woocommerce-MyAccount-navigation ul li:hover a,.woocommerce-MyAccount-navigation ul li.is-active a,.jas-menu li a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,#jas-mobile-menu ul>li:hover>a,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>.holder,#jas-footer a:hover,.inside-thumb a:hover,.jas-blog-slider .post-thumbnail>div a:hover,.page-numbers li a:hover,.page-numbers.current,.jas-filter a.selected,.sidebar .widget a:hover,.widget a:hover,.widget.widget_price_filter .price_slider_amount,.widget ul.product-categories li:hover>a,.widget ul.product-categories li.current-cat>a,.widget ul.product_list_widget li a:hover span.product-title,.product-button a.button,.p-video a i,.quantity .qty a:hover,.product_meta a:hover,.wc-tabs li.active a,.product-extra .product-button:not(.flex)>.yith-wcwl-add-to-wishlist .tooltip,.page-head a:hover,.vc_tta-tab.vc_active>a,.woocommerce .widget_layered_nav ul li a:hover,.woocommerce-page .widget_layered_nav ul li a:hover,.woocommerce .widget_layered_nav ul li.chosen a,.woocommerce-page .widget_layered_nav ul li.chosen a,.woocommerce .widget_layered_nav ul li span:hover,.woocommerce-page .widget_layered_nav ul li span:hover,.woocommerce .widget_layered_nav ul li.chosen span,.woocommerce-page .widget_layered_nav ul li.chosen span{color:#b59677}input:not([type="submit"]):not([type="checkbox"]):focus,textarea:focus,a.button-o,input.button-o,button.button-o,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.header-7 .jas-socials a,#jas-backtop,.more-link,.product-button a.button,.product-button>*,.single-btn .btn-quickview,.p-video a,.btn-atc .yith-wcwl-add-to-wishlist a,.header-7 #jas-mobile-menu>ul>li,.header-7 #jas-mobile-menu ul ul{border-color:#b59677}input[type="submit"]:not(.button-o),button,a.button,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.bgp,.bghp:hover,#jas-backtop span:before,.more-link:hover,.widget .tagcloud a:hover,.jas-mini-cart .button.checkout,.woocommerce-pagination-ajax a:hover,.woocommerce-pagination-ajax a.disabled,.jas-ajax-load a:hover,.jas-ajax-load a.disabled,.widget.widget_price_filter .ui-slider-range,.widget.widget_price_filter .ui-state-default,.product-image:hover .product-button a:hover,.yith-wcwl-add-to-wishlist i.ajax-loading,.btn-atc .yith-wcwl-add-to-wishlist a:hover,.entry-summary .single_add_to_cart_button,.entry-summary .external_single_add_to_cart_button,.jas-service[class*="icon-"] .icon:before,.metaslider .flexslider .flex-prev,.metaslider .flexslider .flex-next,.slick-prev,.slick-next{background-color:#b59677}h1,h2,h3,h4,h5,h6,.cd,.wp-caption-text,.woocommerce-MyAccount-navigation ul li a,.jas-menu>li>a,#jas-mobile-menu ul li a,.holder,.page-numbers li,.page-numbers li a,.jas-portfolio-single .portfolio-meta span,.sidebar .widget a,.sidebar .widget ul li:before,.jas-mini-cart .mini_cart_item a:nth-child(2),.widget a,.product-category h3 .count,.widget ul.product-categories li a,.widget ul.product_list_widget li a span.product-title,.widget ul.product_list_widget li ins,.price,.product-image .product-attr,.product_meta>span,.shop_table th,.order-total,.order-total td,.jas-sc-blog .post-info h4 a{color:#4d5959}.error-404.not-found a,.jas-pagination,.woocommerce-pagination,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a{border-color:#4d5959}mark,.bgd,.error-404.not-found a:hover,#wp-calendar caption,.widget .tagcloud a,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-ordering select,.jas-mini-cart .button,.sidebar .widget_shopping_cart .button,.actions .button.apply-cupon,.actions .button.update-cart,.button.continue-button{background-color:#4d5959}.jas-socials a,.header-text,.header__top .jas-action a{color:#fff}.jas-socials a{border-color:#fff}.jas-menu>li>a,#jas-mobile-menu ul>li:hover>a,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>.holder{color:#4d5959}.jas-menu li>a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,.jas-account-menu a:hover{color:#b59677}.jas-menu ul a,.jas-account-menu ul a{color:#fff}.jas-menu ul li a:hover{color:#b59677}.jas-menu ul,.jas-account-menu ul{background:#3e3e3e}#jas-footer:before{background:rgba(0,0,0,.95)}#jas-footer,.footer__top a,.footer__bot a{color:#fff}</style>
@endpush
@push('meta')
<link rel="canonical" href="{{route('faqs')}}" />
<meta itemprop="name" content="{{config('app.name')}}">
<meta itemprop="description" content="{{$configKeyword->description}}">
<meta itemprop="image" content="{{asset('assets/imagens/logo/logo.png')}}">
<meta property="og:title" content="Contato {{config('app.name')}}" />
<meta property="og:url" content="{{route('contact')}}" />
<meta property="og:image" content="{{asset('assets/imagens/logo/logo.png')}}" />
<meta property="og:image:url" content="{{asset('assets/imagens/logo/logo.png')}}" />
<meta property="og:description" content="{{$configKeyword->description}}" />
<meta property="og:site_name" content="{{config('app.name')}}" />
<meta property="og:type" content="contact" />
@endpush
@push('body')
<body class="page-template-default page page-id-3907 logged-in yith-wcan-free has-btn-sticky wpb-js-composer js-comp-ver-5.2.1 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">
@endpush
@section('content')
    <div id="jas-content">
        <div class="page-head pr tc" style="background: url({{asset('assets/imagens/home/banners/cadastro.jpg')}}) no-repeat center center / cover;">
            <div class="jas-container pr">
                <h1 class="tu mb__10 cw" itemprop="headline">FAQs</h1>
                <p></p>
                <ul class="jas-breadcrumb dib oh">
                    <li class="fl home"><a href="{{route('home.site')}}" title="Home">Home</a></li>
                    <li class="fl separator"> <i class="fa fa-angle-right"></i> </li>
                    <li class="fl current"> FAQs</li>
                </ul>
            </div>
        </div>
        <div class="jas-container">
            <div class="jas-row jas-page">
                <div class="jas-col-md-9 jas-col-xs-12 mt__60 mb__60" role="main" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                    <div class="jas-container">
                        <div class="vc_row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  vc_custom_1461496320648">
                                            <div class="wpb_wrapper">
                                                <div class="faqs">
                                                    <h3>1. PEDIDOS ONLINE</h3>
                                                    <h4>1.1 Preciso fazer um cadastro para fazer um pedido no site da {{config('app.name')}} ?</h4>
                                                    <p>Sim, o procedimento é bem simples, basta <a href="{{route('register')}}" target="_blank">acessar a página de cadastro</a>, preencher alguns dados que forem solicitados e dar prosseguimento no cadastro. </p>
                                                    <h4>1.2 Como faço para criar uma conta?</h4>
                                                    <p>Por favor, clique em <a href="{{route('register')}}" target="_blank">"Cadastro"</a> e preencha os dados de acordo com seu perfil.</p>
                                                    <p>Depois de enviar o cadastro você recebera no seu email informado um link para confirmação. Clique em "Concluir Cadastro". Seu acesso só será liberado após a confirmação.</p>
                                                    <h4>1.3 Como faço para fazer um pedido?</h4>
                                                    <p>Veja os itens que deseja e adicione-o a sua lista de desejo. Quando você terminar, você pode clicar em "Finalizar Pedido". Verifique se todas as informações (Cor, Tamanho e Modelo), estão corretas antes de confirmar seu pedido.</p>
                                                    <h4>1.4 Qual a quantidade mínima de cada pedido?</h4>
                                                    <p>A quantidade mínima é <em>12 pares</em>. Podendo mesclar modelos cores e tamanhos.</p>
                                                    <h4>1.5 Como sei se o meu pedido está confirmado?</h4>
                                                    <p>Após recebermos seu pedido, você receberá um e-mail de confirmação. No entanto, nossa equipe verá a disponibilidade em estoque e entrando em contato com você em seguida. Você pode verificar o status do seu pedido em "Minha Conta" se você for um cliente cadastrado.</p>
                                                    <h4>1.6 Ainda não recebi meu pedido, o que fazer?</h4>
                                                    <p>Primeiro, verifique se a data não está dentro do prazo de entrega previsto. Você pode confirmar essa e todas as outras informações sobre a entrega na aba "Meus pedidos" em nosso site. Se você ainda não recebeu seu pedido e a data de entrega já expirou, certifique-se que o pagamento foi confirmado pela administradora de seu cartão. Para os casos de boleto, verifique se ele foi pago até a data do vencimento. Veja também se o endereço colocado para entrega está correto.</p>
                                                    <p>Se o seu pedido foi enviado pelos Correios, eventualmente, ele poderá ficar disponível para retirada na própria agência. Neste caso verifique o rastreamento em: “Meus Pedidos”, clique em “Ver Detalhes” e em seguida “Acompanhe a entrega”. Ali você terá a informação da agência em que se encontra seu pedido. A retirada deverá ser realizada pelo responsável que consta na Nota Fiscal, apresentando documento com foto (RG ou CNH). </p>
                                                    <h3><strong><br clear="all" /> </strong></h3>
                                                    <h3>2. TRANSPORTE E ENTREGA</h3>
                                                    <h4>2.1 Posso alterar o endereço de entrega?</h4>
                                                    <p>A alteração do endereço de entrega poderá ser efetuada, antes de concluir o seu pedido. No momento do pedido, terá as seguintes opções: “Entregar Neste Endereço” ou “Alterar”.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- $classes -->
                <div class="jas-col-md-3 jas-col-xs-12" role="main">
                    <div class="sidebar mt__60 mb__60" role="complementary" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
                        @include('instagram.instagram-2')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
