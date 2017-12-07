@component('mail::message')
# Olá {{$address->user->first_name}}
Seu endereço de entrega foi alterado!

Endereço: {{$address->address}}<br>
Número: {{$address->number}}<br>
Complemento: {{$address->complement}}<br>
Bairro: {{$address->district}}<br>
Cidade: {{$address->city}}<br>
Estado: {{$address->state}}<br>
CEP: {{$address->zip_code}}

Se houver algum dado incorreto em seu endereço  a transportadora irá devolver o pedido. Nós entraremos em contato com você a fim de regularizar o endereço de entrega. Nesse caso, será cobrado uma nova taxa de entrega para o reenvio dos produtos e o prazo será impactado.



Saudações,<br>
{{ config('app.name') }}
@endcomponent
