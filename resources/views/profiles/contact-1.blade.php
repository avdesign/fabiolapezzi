<legend>Dados para Contato</legend>
<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
    <label for="email">Email<span class="required">*</span></label>
    <input type="email" name="user[email]" id="email" value="{{ $user->email or old('user.email') }}" class="woocommerce-Input woocommerce-Input--email input-text" />
</p>

<div class="clear"></div>
<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
    <label for="cell">Celular <span class="required">*</span></label>
    <input type="text" name="user[cell]" id="cell" value="{{ $user->cell or old('user.cell') }}"class="woocommerce-Input woocommerce-Input--text input-text" />
</p>
<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
    <label for="phone">Telefone (fixo) <span class="required">*</span></label>
    <input type="text" name="user[phone]" id="phone" value="{{ $user->phone or old('user.phone') }}"class="woocommerce-Input woocommerce-Input--text input-text" />
</p>