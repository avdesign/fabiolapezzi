<!-- #jas-content -->
<footer id="jas-footer" class="footer-1 pr cw" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
    <div class="footer__top pb__80 pt__80" style="background-image: url({{asset('assets/avd-content/uploads/2016/05/footer-bg.jpg')}});">
        <div class="jas-container pr">
            <div class="jas-row">
                <div class="jas-col-md-3 jas-col-sm-6 jas-col-xs-12">
                    <aside id="text-3" class="widget widget_text">
                        <div class="textwidget">
                            <div class="footer-contact">
                                <p>
                                    <a href="index.php">
                                        <img alt="{{config('app.name')}}" src="{{url('assets/imagens/logo/footer-logo.png')}}" class="mt__5 mb__15 size-full" width="150">
                                    </a>
                                </p>
                                <ul class="jas-social mt__15">
                                    <li>
                                        <a href="https://www.facebook.com/fabiola.calcados" target="_blank" title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/fabiolapezzi/" target="_blank" title="Instagram">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="jas-col-md-3 jas-col-sm-6 jas-col-xs-12">
                    <aside id="nav_menu-3" class="widget widget_nav_menu">
                        <h3 class="widget-title tu">BARÃO DE LADÁRIO</h3>
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu">
                                <li id="menu-item-4365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4365">
                                    <i class="fa fa-map-signs" aria-hidden="true"></i> Rua Barrão de Ladário, 347
                                </li>
                                <li id="menu-item-4365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4365">
                                    <i class="fa fa-map-marker"></i> Brás - São Paulo
                                </li>
                                <li id="menu-item-4365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4365">
                                    <i class="fa fa-phone"></i> (11) 3227-5009 / 2693-3294
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="jas-col-md-3 jas-col-sm-6 jas-col-xs-12">
                    <aside id="nav_menu-3" class="widget widget_nav_menu">
                        <h3 class="widget-title tu">CAVALHEIRO</h3>
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu">
                                <li id="menu-item-4365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4365">
                                    <i class="fa fa-map-signs" aria-hidden="true"></i> Rua Cavalheiro, 197
                                </li>
                                <li id="menu-item-4365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4365">
                                    <i class="fa fa-map-marker"></i> Brás - São Paulo
                                </li>
                                <li id="menu-item-4365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4365">
                                    <i class="fa fa-phone"></i> (11) 2693-9419 / 2693-2196
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="jas-col-md-3 jas-col-sm-6 jas-col-xs-12">
                    <aside id="text-2" class="widget widget_text">
                        <div class="textwidget">
                            <p>Assine a nossa newsletter para receber nossas novidades. Prometemos não repassar suas informações a terceiros.</p>
                            <div id="return-form-newsletter" style="display:none"></div>

                            <form id="form-newsletter" action="{{route('newsletter.store')}}" class="mc4wp-form mc4wp-form-4073" method="post" onsubmit="return false">
                                <div class="mc4wp-form-fields">
                                    <div class="signup-newsletter-form dib mb__15">
                                        <input type="email" class="input-text" name="email" autocomplete="off" placeholder="Seu Email" required />
                                        <input type="submit" id="form-newsletter-submit" onclick="postFormJson(jQuery(this.form).attr('id'));" class="submit-btn" value="Enviar" />
                                        {{csrf_field()}}
                                    </div>

                                </div>
                            </form>
                            <p>
                        </div>
                    </aside>
                </div>
            </div>
            <!-- .jas-row -->
        </div>
        <!-- .jas-container -->
    </div>
    <!-- .footer__top -->
    <div class="footer__bot">
        <div class="jas-container pr tc">
            <div class="jas-row">
                <div class="jas-col-md-6 jas-col-sm-12 jas-col-xs-12 start-md center-sm center-xs">
                    @php $date = date('Y');@endphp
                    &copy;  {{$date}}
                    <span class="cp">{{config('app.name')}} &reg;</span> Todos os direitos reservados. Projeto
                    <a href="http://www.anselmovelame.com.br">
                        <img src="{{url('assets/imagens/logo/avdesign.png')}}">
                    </a>
                </div>
                <div class="jas-col-md-6 jas-col-sm-12 jas-col-xs-12 end-md end-sm center-xs flex">
                    <ul id="jas-footer-menu" class="clearfix">
                        <li id="menu-item-4076" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4076">
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li id="menu-item-4077" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4077">
                            <a href="{{route('contact')}}">Contato</a>
                        </li>
                        <li id="menu-item-4078" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4078">
                            <a href="{{route('register')}}">Cadastro</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer__bot -->
</footer>
<!-- #jas-footer -->