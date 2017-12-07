@component('mail::message')
# Olá {{$user->first_name}}

Você confirmou o seu email e seu cadastro esta ativo.

Obrigado,<br>
{{ config('app.name') }}<br>
{{ env('DT_PHONE') }}
@endcomponent
