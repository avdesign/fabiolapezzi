<style>
    .ypop-overlay {
        background-color: #000;
        opacity: 0.5;
    }

    .ypop-wrapper {
        width: 550px;
        height: auto;
        padding: 10px;
    }

    .ypop-container-inner {
        background-color: #ffffff;
    }

    .ypop-header {
        height: 200px;
        background-image: url({{asset('assets/imagens/home/banners/banner-pop.png')}});
    }


    .ypop-title {
        position: absolute;
        color: #000;
        margin-top: 10px;
    }

    .ypop-wrapper button,
    .ypop-content-type .contact-form input[type=submit] {
        background-image: none;
        background-color: #b59677;
        color: #ffffff
    }

    .ypop-wrapper button:hover,
    .ypop-wrapper button:active,
    .ypop-content-type .contact-form input[type=submit]:hover,
    .ypop-content-type .contact-form input[type=submit]:active {
        background-color: #b5987c;
    }

    .ypop-footer {
        background-color: #f4f4f4;
    }

    .ypop-wrapper a.close {
        background-image: url({{asset('assets/avd-content/plugins/yith-avdesign-popup/assets/images/close-buttons/close1.png')}};
        background-color: #ff8a00;
        background-position: center center;
        background-repeat: no-repeat;
        }

        .ypop-checkzone {
        background-color: transparent;
        color: #333333;
        }
</style>
<div class="ypop-modal">
    <div class="ypop-overlay"></div>
    <div class="ypop-wrapper">
        <!-- yit-newsletter-popup -->
        <div class="ypop-container">
            <div class="ypop-container-inner">
                <div class="ypop-header">
                </div>

                <div class="ypop-content-wrapper">
                    <div class="ypop-content">
                        <h3>EM BREVE UM NOVO SITE EXCLUSIVO PARA LOGISTAS E REVENDEDORES</h3>
                        <p style="color: #494949;">Maiores informações sobre vendas no atacado entre em contato.</p>
                        <!--
						<div class="ypop-content-type">
							<div class="ypop-form-newsletter-wrapper">
								<div class="message-box"></div>
								<form method="post" action="#">
									<fieldset>
										<ul class="group">
											<li>
												<div class="newsletter_form_email">
													<input type="email" placeholder="Seu email..." name="email" id="email_pop" class="email-field text-field autoclear" />
												</div>
											</li>
											<li class="ypop-submit">
												<input type="hidden" name="yit_mailchimp_newsletter_form_id" value="4280" />
												<input type="hidden" name="action" value="ypop_subscribe_mailchimp_user" />
												<input type="hidden" id="yit_mailchimp_newsletter_form_nonce" name="yit_mailchimp_newsletter_form_nonce" value="569e40dcb5" />
												<input type="hidden" name="_wp_http_referer" value="/gecko/fashion/" />
												<button type="submit" class="btn submit-field mailchimp-subscription-ajax-submit">Enviar</button>
											</li>
										</ul>
									</fieldset>
								</form>
							</div>
						</div>
						-->
                    </div>
                </div>

                <!-- ypop-border
				<div class="ypop-footer">Suas informações nunca serão compartilhadas com terceiros. </div>
				<div class="ypop-checkzone">
					<label for="hideforever">
						<input type="checkbox" id="hideforever" name="no-view" class="no-view yith-popup-checkbox">
						<span>&nbsp;</span>Não mostre mais.
					</label>
				</div>
				-->
            </div>
        </div>
        <!-- ypop-container -->
        <!-- END yit-newsletter-popup -->
    </div>
</div>