<p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40">
    <label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label>
    <select name="billing_country" id="billing_country" class="country_to_state country_select " autocomplete="country">
        <option value="">Select a country&hellip;</option>
        <option value="BR" selected='selected'>Brazil</option>
    </select>
<noscript>
    <input type="submit" name="woocommerce_checkout_update_totals" value="Update country" />
</noscript>
</p>
<p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
    <label for="billing_address_1" class="">Street address <abbr class="required" title="required">*</abbr></label>
    <input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="House number and street name" value="" autocomplete="address-line1" />
</p>
<p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60">
    <input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" autocomplete="address-line2" />
</p>
<p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-priority="70">
    <label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label>
    <input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="" autocomplete="address-level2" />
</p>
<p class="form-row form-row-wide address-field validate-required validate-state" id="billing_state_field" data-priority="80">
    <label for="billing_state" class="">State / County <abbr class="required" title="required">*</abbr></label>
    <select name="billing_state" id="billing_state" class="state_select " autocomplete="address-level1" data-placeholder="">
        <option value="">Select a state&hellip;</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amap&aacute;</option>
        <option value="AM">Amazonas</option>
        <option value="BA" selected='selected'>Bahia</option>
        <option value="CE">Cear&aacute;</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Esp&iacute;rito Santo</option>
        <option value="GO">Goi&aacute;s</option>
        <option value="MA">Maranh&atilde;o</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Par&aacute;</option>
        <option value="PB">Para&iacute;ba</option>
        <option value="PR">Paran&aacute;</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piau&iacute;</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rond&ocirc;nia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">S&atilde;o Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
    </select>
</p>
<p class="form-row form-row-wide address-field validate-required validate-postcode" id="billing_postcode_field" data-priority="90">
    <label for="billing_postcode" class="">Postcode / ZIP <abbr class="required" title="required">*</abbr></label>
    <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" autocomplete="postal-code" />
</p>
<p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="100">
    <label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
    <input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel" />
</p>
<p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-priority="110">
    <label for="billing_email" class="">Email address <abbr class="required" title="required">*</abbr></label>
    <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="design@anselmovelame.com.br" autocomplete="email username" />
</p>