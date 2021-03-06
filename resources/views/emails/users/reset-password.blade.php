@component('mail::message')

Você está recebendo este email porque recebemos um pedido de redefinição de senha para sua conta.

@component('mail::button', ['url' => route('password.reset', $token)])
   Clique aqui para redefinir sua senha
@endcomponent

Se você não solicitou uma redefinição da senha, nenhuma ação será necessária.

Saudações,<br>
{{ config('app.name') }}<br>
{{ env('DT_PHONE') }}
@endcomponent
