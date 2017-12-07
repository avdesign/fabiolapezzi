@extends('layouts.template-1')

@push('title')
<title>{{$title or 'Mensgem '}} {{config('app.name')}}</title>
@endpush

@push('body')
<body class="page-template-default page page-id-7 woocommerce-account woocommerce-page yith-wcan-free has-btn-sticky wpb-js-composer js-comp-ver-5.2.1 vc_responsive"  itemscope="itemscope" itemtype="http://schema.org/WebPage" >
@endpush
@section('content')
    <div id="jas-content">
        @include('flash-messages.flash-message-1')
    </div>
@endsection