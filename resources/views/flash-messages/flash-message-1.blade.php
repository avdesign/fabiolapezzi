@if(session()->has('success'))
    <div class="woocommerce-message">{{session('success')}}</div>
@endif
@if(session()->has('error'))
    <div class="woocommerce-error">{{session('error')}}</div>
@endif
@if(session()->has('errors'))
    <div class="woocommerce-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif