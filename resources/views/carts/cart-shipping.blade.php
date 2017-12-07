<tr class="shipping">
    <th>Frete</th>
    <td data-title="Shipping">
        Local Pickup: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span>
        <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="local_pickup:4" class="shipping_method" />

        <form class="woocommerce-shipping-calculator" action="{{route('shipping.calculator')}}" method="post">

            <p><a href="#" class="shipping-calculator-button">Calcular Frete</a></p>

            <section class="shipping-calculator-form" style="display:none;">

                <p class="form-row form-row-wide" id="calc_shipping_country_field">
                    <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state" rel="calc_shipping_state">
                        <option value="">Selecione o Estado</option>
                        <option value="BR" selected='selected'>Brazil</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                </p>

                <p class="form-row form-row-wide" id="calc_shipping_state_field">
                                                        <span>
                                                            <select name="calc_shipping_state" id="calc_shipping_state" placeholder="State / County">
                                                                <option value="">Select a state&hellip;</option>
                                                                <option value="AC" >Acre</option>
                                                                <option value="AL" >Alagoas</option>
                                                                <option value="AP" >Amap&aacute;</option>
                                                                <option value="AM" >Amazonas</option>
                                                                <option value="BA" >Bahia</option>
                                                                <option value="CE" >Cear&aacute;</option>
                                                                <option value="DF" >Distrito Federal</option>
                                                                <option value="ES" >Esp&iacute;rito Santo</option>
                                                                <option value="GO" >Goi&aacute;s</option>
                                                                <option value="MA" >Maranh&atilde;o</option>
                                                                <option value="MT" >Mato Grosso</option>
                                                                <option value="MS" >Mato Grosso do Sul</option>
                                                                <option value="MG" >Minas Gerais</option>
                                                                <option value="PA" >Par&aacute;</option>
                                                                <option value="PB" >Para&iacute;ba</option>
                                                                <option value="PR" >Paran&aacute;</option>
                                                                <option value="PE" >Pernambuco</option>
                                                                <option value="PI" >Piau&iacute;</option>
                                                                <option value="RJ" >Rio de Janeiro</option>
                                                                <option value="RN" >Rio Grande do Norte</option>
                                                                <option value="RS" >Rio Grande do Sul</option>
                                                                <option value="RO" >Rond&ocirc;nia</option>
                                                                <option value="RR" >Roraima</option>
                                                                <option value="SC" >Santa Catarina</option>
                                                                <option value="SP" >S&atilde;o Paulo</option>
                                                                <option value="SE" >Sergipe</option>
                                                                <option value="TO" >Tocantins</option>						<
                                                            </select>
                                                      </span>
                </p>

                <p class="form-row form-row-wide" id="calc_shipping_postcode_field">
                    <input type="text" class="input-text" value="" placeholder="Postcode / ZIP" name="calc_shipping_postcode" id="calc_shipping_postcode" />
                </p>

                <p>
                    <button type="submit" name="calc_shipping" value="1" class="button">Update totals</button>
                </p>

                <input type="hidden" id="_wpnonce" name="_wpnonce" value="65bba1f058" />
                <input type="hidden" name="_wp_http_referer" value="/claue/demo/cart/" /> </section>
        </form>

    </td>
</tr>