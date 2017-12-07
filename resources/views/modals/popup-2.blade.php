<div class="ypop-modal">
    <div class="ypop-overlay"></div>
    <div class="ypop-wrapper">
        <div class="ypop-container">
            <div class="ypop-container-inner">
                <div class="ypop-header" style="background-image: url({{asset('assets/imagens/popups/banner-pop.png')}});">
                    <!--<h2 class="ypop-title">Assine nossa Newsletter</h2>-->
                </div>
                <div class="ypop-content-wrapper">
                    <div class="ypop-content">
                        <h3>SITE EXCLUSIVO PARA LOGISTAS E REVENDEDORES</h3>
                        Inscreva-se em nosso boletim informativo e não perca as novas novidades, as últimas atualizações da moda e nossas promoções.
                        <div class="ypop-content-type">
                            <div class="ypop-form-newsletter-wrapper">
                                <div class="message-box" style="display: none"></div>

                                <form method="post" id="form-newsletter-pop" action="{{route('newsletter.store')}}" onsubmit="return false">
                                    <fieldset>
                                        <ul class="group">
                                            <li id="return-form-newsletter-pop" style="display:none"></li>
                                            <li>
                                                <div class="newsletter_form_email">
                                                    <input type="text" placeholder="Seu email..." name="email" id="yit_mailchimp_newsletter_form_email" class="email-field text-field autoclear" />
                                                </div>
                                            </li>
                                            <li class="ypop-submit">
                                                {{csrf_field()}}
                                                <button type="submit" id="form-newsletter-pop-submit" onclick="postFormJson(jQuery(this.form).attr('id'));" class="btn submit-field mailchimp-subscription-ajax-submit">Se Inscrever</button>
                                            </li>
                                        </ul>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ypop-footer">Suas informações nunca serão compartilhadas com terceiros.</div>
                <div class="ypop-checkzone">
                    <label for="hideforever">
                        <input type="checkbox" id="hideforever" name="no-view" class="no-view yith-popup-checkbox">
                        <span>&nbsp;</span>Não mostre mais.
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>