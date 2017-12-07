@component('mail::message')
# Olá {{$contact->name}},

{{$contact->configSubject->message}}

Atenciosamente,<br>
{{ config('app.name') }}<br>
{{ env('DT_PHONE') }}
@endcomponent
