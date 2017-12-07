@component('mail::message')
# Confirme seu email para receber informações da {{ config('app.name') }}

Agora você pode ficar por dentro de tudo o que acontece na {{ config('app.name') }}.

São ofertas, novas coleções, dicas e muito mais. Não perca tempo, confirme e aproveite!

@component('mail::button', ['url' => $created['url']])
Confirmar
@endcomponent

Se isso foi um erro, ignore este e-mail e nada acontecerá.

Obrigado,<br>
{{ config('app.name') }}<br>
{{ env('DT_PHONE') }}
@endcomponent
