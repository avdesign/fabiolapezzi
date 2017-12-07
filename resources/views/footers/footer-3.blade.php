<!-- #avd-footer -->
<footer id="jas-footer" class="bgbl footer-1" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
    <div class="footer__top pb__80 pt__80">
        <div class="jas-container pr">
            <div class="jas-row">
                <div class="jas-col-md-3 jas-col-sm-6 jas-col-xs-12">
                    <aside id="nav_menu-6" class="widget widget_nav_menu">
                        <h3 class="widget-title fwsb fs__16 mg__0 mb__30">BARRÁO DE LADÁRIO</h3>
                        <div class="menu-categories-container">
                            <ul id="menu-categories" class="menu">
                                <li id="menu-item-4976" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-4976">
                                    <i class="pe-7s-map-marker"> </i><span>Rua Barrão de Ladário, 347</span>
                                </li>
                                <li id="menu-item-4973" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-4973">
                                    <i class="pe-7s-call"></i><span>(11) 3227-5009 / 2693-3294</span>
                                </li>
                                <li id="menu-item-4981" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4981">
                                    <span style="padding-left: 30px">BRÁS - SÃO PAULO</span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="jas-col-md-3 jas-col-sm-6 jas-col-xs-12">
                    <aside id="nav_menu-7" class="widget widget_nav_menu">
                        <h3 class="widget-title fwsb fs__16 mg__0 mb__30">CAVALHEIRO</h3>
                        <div class="menu-infomation-container">
                            <ul id="menu-infomation" class="menu">
                                <li id="menu-item-4978" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4978">
                                    <i class="pe-7s-map-marker"> </i><span>Rua Cavalheiro, 197</span>
                                </li>
                                <li id="menu-item-4979" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4979">
                                    <i class="pe-7s-call"></i><span>(11) 2693-9419 / 2693-2196</span>
                                </li>
                                <li id="menu-item-4983" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4983">
                                    <span style="padding-left: 30px">BRÁS - SÃO PAULO</span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="jas-col-md-3 jas-col-sm-6 jas-col-xs-12">
                    <aside id="nav_menu-3" class="widget widget_nav_menu">
                        <h3 class="widget-title fwsb fs__16 mg__0 mb__30">INFORMAÇÕES AO CLIENTE</h3>
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu">
                                <li id="menu-item-4365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4365">
                                    <a href="{{route('location')}}">Localização das Lojas</a>
                                </li>
                                <li id="menu-item-4366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4366">
                                    <a href="{{route('faqs')}}">Perguntas Frequentes</a>
                                </li>
                                <li id="menu-item-4370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4370">
                                    <a href="{{route('privacy')}}">Política de Privacidade</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="jas-col-md-3 jas-col-sm-6 jas-col-xs-12">
                    <aside id="text-3" class="widget widget_text">
                        <div class="textwidget">
                            <p>Inscreva-se em nossa newsletter e fique por dentro das novidades e promocões. da {{config('app.name')}}</p>
                            <div id="return-form-newsletter" style="display:none"></div>
                            <form id="form-newsletter" action="{{route('newsletter.store')}}" class="mc4wp-form mc4wp-form-4073" method="post" onsubmit="return false">
                                <div class="mc4wp-form-fields">
                                    <div class="signup-newsletter-form dib mb__15">
                                        <input type="email" class="input-text" name="email" autocomplete="off" placeholder="Seu Email" required />
                                        <input type="submit" class="submit-btn" id="form-newsletter-submit" onclick="postFormJson(jQuery(this.form).attr('id'));" value="Inscrever" />
                                    </div>
                                    <div style="display: none;">
                                        {{csrf_field()}}
                                    </div>
                                </div>
                                <div class="mc4wp-response"></div>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
            <!-- .jas-row -->
        </div>
        <!-- .jas-container -->
    </div>
    <!-- .footer__top -->
    <div class="footer__bot pt__20 pb__20 lh__1">
        <div class="jas-container pr tc">
            <div class="jas-row">
                <div class="jas-col-md-6 jas-col-sm-12 jas-col-xs-12 start-md center-sm center-xs">
                    @php $date = date('Y');@endphp
                    Copyright © {{$date}} <span class="cp">{{config('app.name')}} &reg;</span> Todos os direitos reservados. Projeto
                    <a href="http://www.anselmovelame.com.br"><img src="{{url('assets/imagens/logo/avdesign.png')}}" width="60"></a>
                </div>
                <div class="jas-col-md-6 jas-col-sm-12 jas-col-xs-12 end-md center-sm center-xs flex">
                    <ul id="jas-footer-menu" class="clearfix">
                        <li id="menu-item-4078" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4078">
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li id="menu-item-4077" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4077">
                            <a href="{{route('contact')}}">Contato</a>
                        </li>
                        <li id="menu-item-4079" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4079">
                            <a href="{{route('register')}}">Cadastro</a>
                        </li>
                        <li id="menu-item-4655" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4079">
                            <a href="{{route('register')}}">---</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer__bot -->
</footer>
