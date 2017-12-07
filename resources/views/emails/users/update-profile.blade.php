@component('mail::message')
Olá {{$user['first_name']}}

Confirmamos a alteração dos seus dados cadastrais.

@if ($user['profile_id'] == 2 )
Perfil: Pessoa Física<br>
Nome: {{$user['first_name']}}<br>
Sobrenome: {{$user['last_name']}}<br>
CPF: {{$user['document1']}}<br>
RG: {{$user['document2']}}<br>
Telefone: {{$user['phone']}}<br>
Celular: {{$user['cell']}}<br>
@else
Perfil: Pessoa Jurídica<br>
Nome Fantasia: {{$user['first_name']}}<br>
Razão Social: {{$user['last_name']}}<br>
CNPJ: {{$user['document1']}}<br>
nscrição Estadual: {{$user['document2']}}<br>
Telefone: {{$user['phone']}}<br>
Celular: {{$user['cell']}}<br>
@endif

Saudações,<br>
{{ config('app.name') }}<br>
{{ env('DT_PHONE') }}
@endcomponent
