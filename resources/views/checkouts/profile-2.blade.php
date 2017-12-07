<div id="profile_2">
    <legend>Pessoa Física</legend>
    <p class="form-row form-row-first">
        <label for="first_name" class="">Nome<span class="required">*</span></label>
        <input type="text" name="user[first_name]" id="first_name" value="{{ $user->first_name or old('user.first_name') }}" class="input-text">
    </p>
    <p class="form-row form-row-last">
        <label for="last_name" class="">Sobre Nome<span class="required">*</span></label>
        <input type="text" name="user[last_name]" id="last_name" value="{{ $user->last_name or old('user.last_name') }}" class="input-text">
    </p>

    <p class="form-row form-row-first">
        <label for="document1" class="">CPF<span class="required">*</span></label>
        <input type="text" name="user[document1]" id="document1" value="{{ $user->document1 or old('user.document1') }}" class="input-text">
    </p>
    <p class="form-row form-row-last">
        <label for="document2" class="">RG<span class="required">*</span></label>
        <input type="text" name="user[document2]" id="document2" value="{{ $user->document2 or old('user.document2') }}" class="input-text">
    </p>
</div>
<script type='text/javascript'>
    jQuery( document ).ready(function($) {
        $("#document1").mask('999.999.999-99');
    });
</script>