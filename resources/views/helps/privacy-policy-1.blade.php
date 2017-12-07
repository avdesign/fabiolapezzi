@extends('layouts.template-1')
@push('title')
<title>Privacidade e Segurança {{config('app.name')}} {{$configKeyword->description}} </title>
<meta name="description" content="{{$configKeyword->description}} , {{$configKeyword->genders}}">
<meta name="keywords" content="{{$configKeyword->keywords}},{{$configKeyword->categories}},{{$configKeyword->genders}}">
@endpush
@push('styles')
<style id='jas-gecko-style-inline-css' type='text/css'>.jas-branding{max-width:200px;margin:auto}.header-6 .header__mid,.header-7{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}.header-6 .header__mid:before{content:"";position:absolute;background:rgba(255,255,255,.85);left:0;top:0;width:100%;height:100%;z-index:0}.header-6 .header__mid .jas-branding,.header-7 .jas-branding{position:relative}.footer__top{background-size:cover;background-repeat:no-repeat;background-position:center center;background-attachment:scroll}body,.f__lato{font-family:"Lato";font-weight:400;font-size:14px;background-color:#fff;color:#999}h1,h2,h3,h4,h5,h6,.f__mont{font-family:"Montserrat";font-weight:400}h1,h2,h3,h4,h5,h6{color:#4d5959}h1{font-size:50px}h2{font-size:30px}h3{font-size:20px}h4{font-size:16px}h5{font-size:14px}h6{font-size:12px}a,a:hover,a:active,a.button-o,input.button-o,button.button-o,.cp,.chp:hover,.header-7 .jas-socials a,.header__top .jas-action a:hover,.woocommerce-MyAccount-navigation ul li:hover a,.woocommerce-MyAccount-navigation ul li.is-active a,.jas-menu li a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,#jas-mobile-menu ul>li:hover>a,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>.holder,#jas-footer a:hover,.inside-thumb a:hover,.jas-blog-slider .post-thumbnail>div a:hover,.page-numbers li a:hover,.page-numbers.current,.jas-filter a.selected,.sidebar .widget a:hover,.widget a:hover,.widget.widget_price_filter .price_slider_amount,.widget ul.product-categories li:hover>a,.widget ul.product-categories li.current-cat>a,.widget ul.product_list_widget li a:hover span.product-title,.product-button a.button,.p-video a i,.quantity .qty a:hover,.product_meta a:hover,.wc-tabs li.active a,.product-extra .product-button:not(.flex)>.yith-wcwl-add-to-wishlist .tooltip,.page-head a:hover,.vc_tta-tab.vc_active>a,.woocommerce .widget_layered_nav ul li a:hover,.woocommerce-page .widget_layered_nav ul li a:hover,.woocommerce .widget_layered_nav ul li.chosen a,.woocommerce-page .widget_layered_nav ul li.chosen a,.woocommerce .widget_layered_nav ul li span:hover,.woocommerce-page .widget_layered_nav ul li span:hover,.woocommerce .widget_layered_nav ul li.chosen span,.woocommerce-page .widget_layered_nav ul li.chosen span{color:#b59677}input:not([type="submit"]):not([type="checkbox"]):focus,textarea:focus,a.button-o,input.button-o,button.button-o,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.header-7 .jas-socials a,#jas-backtop,.more-link,.product-button a.button,.product-button>*,.single-btn .btn-quickview,.p-video a,.btn-atc .yith-wcwl-add-to-wishlist a,.header-7 #jas-mobile-menu>ul>li,.header-7 #jas-mobile-menu ul ul{border-color:#b59677}input[type="submit"]:not(.button-o),button,a.button,a.button-o:hover,input.button-o:hover,button.button-o:hover,a.button-o-w:hover,.bgp,.bghp:hover,#jas-backtop span:before,.more-link:hover,.widget .tagcloud a:hover,.jas-mini-cart .button.checkout,.woocommerce-pagination-ajax a:hover,.woocommerce-pagination-ajax a.disabled,.jas-ajax-load a:hover,.jas-ajax-load a.disabled,.widget.widget_price_filter .ui-slider-range,.widget.widget_price_filter .ui-state-default,.product-image:hover .product-button a:hover,.yith-wcwl-add-to-wishlist i.ajax-loading,.btn-atc .yith-wcwl-add-to-wishlist a:hover,.entry-summary .single_add_to_cart_button,.entry-summary .external_single_add_to_cart_button,.jas-service[class*="icon-"] .icon:before,.metaslider .flexslider .flex-prev,.metaslider .flexslider .flex-next,.slick-prev,.slick-next{background-color:#b59677}h1,h2,h3,h4,h5,h6,.cd,.wp-caption-text,.woocommerce-MyAccount-navigation ul li a,.jas-menu>li>a,#jas-mobile-menu ul li a,.holder,.page-numbers li,.page-numbers li a,.jas-portfolio-single .portfolio-meta span,.sidebar .widget a,.sidebar .widget ul li:before,.jas-mini-cart .mini_cart_item a:nth-child(2),.widget a,.product-category h3 .count,.widget ul.product-categories li a,.widget ul.product_list_widget li a span.product-title,.widget ul.product_list_widget li ins,.price,.product-image .product-attr,.product_meta>span,.shop_table th,.order-total,.order-total td,.jas-sc-blog .post-info h4 a{color:#4d5959}.error-404.not-found a,.jas-pagination,.woocommerce-pagination,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a{border-color:#4d5959}mark,.bgd,.error-404.not-found a:hover,#wp-calendar caption,.widget .tagcloud a,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-ordering select,.jas-mini-cart .button,.sidebar .widget_shopping_cart .button,.actions .button.apply-cupon,.actions .button.update-cart,.button.continue-button{background-color:#4d5959}.jas-socials a,.header-text,.header__top .jas-action a{color:#fff}.jas-socials a{border-color:#fff}.jas-menu>li>a,#jas-mobile-menu ul>li:hover>a,#jas-mobile-menu ul>li.current-menu-item>a,#jas-mobile-menu ul>li.current-menu-parent>a,#jas-mobile-menu ul>li.current-menu-ancestor>a,#jas-mobile-menu ul>li:hover>.holder,#jas-mobile-menu ul>li.current-menu-item>.holder,#jas-mobile-menu ul>li.current-menu-parent>.holder,#jas-mobile-menu ul>li.current-menu-ancestor>.holder{color:#4d5959}.jas-menu li>a:hover,.jas-menu li.current-menu-ancestor>a,.jas-menu li.current-menu-item>a,.jas-account-menu a:hover{color:#b59677}.jas-menu ul a,.jas-account-menu ul a{color:#fff}.jas-menu ul li a:hover{color:#b59677}.jas-menu ul,.jas-account-menu ul{background:#3e3e3e}#jas-footer:before{background:rgba(0,0,0,.95)}#jas-footer,.footer__top a,.footer__bot a{color:#fff}</style>
@endpush
@push('meta')
<link rel="canonical" href="{{route('track')}}" />
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
<body class="page-template-default page page-id-3914 logged-in yith-wcan-free has-btn-sticky wpb-js-composer js-comp-ver-5.2.1 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">
@endpush
@section('content')
    <div id="jas-content">
        <div class="page-head pr tc" style="background: url({{asset('assets/imagens/home/banners/cadastro.jpg')}}) no-repeat center center / cover;">
            <div class="jas-container pr">
                <h1 class="tu mb__10 cw" itemprop="headline">Privacidade e Segurança</h1>
                <p></p>
                <ul class="jas-breadcrumb dib oh">
                    <li class="fl home"><a href="{{route('home.site')}}" title="Home">Home</a></li>
                    <li class="fl separator"> <i class="fa fa-angle-right"></i> </li>
                    <li class="fl current"> Privacidade e Segurança </li>
                </ul>
            </div>
        </div>
        <div class="jas-container">
            <div class="jas-row jas-page">
                <div class="jas-col-md-9 jas-col-xs-12 mt__60 mb__60" role="main" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                    <div class="jas-container">
                        <div class="vc_row vc_custom_1461082815833">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h2>PRIVACIDADE E SEGURANÇA</h2>
                                                <h3>1. USO DE DADOS E INFORMAÇÕES</h3>
                                                <p>A base de dados formada pela {{config('app.name')}} por meio da coleta de dados do Site não será vendida, cedida, transferida, alugada ou compartilhada com terceiros para finalidades não previstas nesta Política de Privacidade.</p>
                                                <p>Os dados e as informações coletados dos Usuários poderão ser utilizados para as seguintes finalidades:</p>
                                                <ul>
                                                    <li>Responder a eventuais dúvidas e solicitações do Usuário;</li>
                                                    <li>Cumprimento de ordem legal ou judicial;</li>
                                                    <li>Constituir, defender ou exercer regularmente direitos em âmbito judicial ou administrativo;</li>
                                                    <li>Garantir a segurança dos Usuários e administradores;</li>
                                                    <li>Manter atualizados os cadastros dos Usuários e administradores para fins de contato por telefone fixo, celular, e-mail, SMS, mala direta, redes sociais ou por outros meios de comunicação;</li>
                                                    <li>Realizar o enriquecimento da base de dados dos Usuários com a finalidade de customização dos serviços, melhor atendimento, promoção do Site e desenvolvimento de novos produtos; </li>
                                                    <li>Promover o serviço e informar sobre novas oportunidades e benefícios para o Usuário;</li>
                                                    <li>Gerar análises e estudos, sejam estatísticos ou identificáveis, com base no comportamento de uso da ferramenta e do Site;</li>
                                                    <li>Aperfeiçoar o uso e a experiência interativa durante a navegação do Usuário no Site bem como das demais ferramentas e plataformas lançadas pela {{config('app.name')}}.</li>
                                                </ul>
                                                <h3>2. NEWSLETTER - CANCELAMENTO</h3>
                                                <p>A {{config('app.name')}} envia comunicados, ofertas e promoções via e-mail somente com a autorização do destinatário.</p>
                                                <p>Se você optar por não receber mais nossos comunicados, pode solicitar a remoção de seu nome e e-mail, através do link de descadastro contido no próprio e-mail (opt-out) ou em sua página de dados cadastrais, desmarcando a opção que autoriza o envio de e-mails da {{config('app.name')}} para você. Seu e-mail será removido de nossa base em até 48 horas úteis.</p>
                                                <h3>3. REGISTRO DE ATIVIDADES</h3>
                                                <p>A {{config('app.name')}} poderá registrar todas as atividades efetuadas pelos Usuários no Site, por meio de logs, incluindo: </p>
                                                <ul>
                                                    <li>Endereço IP do Usuário;</li>
                                                    <li>Ações efetuadas pelo Usuário no Site;</li>
                                                    <li>Mensagens, avisos e documentos disponibilizados ao Usuário no uso do Site;</li>
                                                    <li>Ferramentas e funcionalidades acessadas pelo Usuário;</li>
                                                    <li>Datas e horários de cada ação e de acesso a cada ferramenta do Site;</li>
                                                    <li>Informações sobre o dispositivo utilizado, versão de sistema operacional, navegador, dentre outros aplicativos e softwares instalados;</li>
                                                    <li>Session ID, quando disponível;</li>
                                                    <li>Outras informações necessárias para a sua adequada autenticação.</li>
                                                </ul>
                                                <br>
                                                <p>Os registros mencionados nos itens poderão ser utilizados pela {{config('app.name')}} como meio probatório em casos de atos ilícitos ou contrários aos Termos de Uso ou ainda de alterações indevidas em seus sistemas e cadastros, ou ações que possam colocar em risco a plataforma e/ou o Site e seus Usuários.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jas-col-md-3 jas-col-xs-12" role="main">
                    <div class="sidebar mt__60 mb__60" role="complementary" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
                        @include('sidebar.offer-1')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection