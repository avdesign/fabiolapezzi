@if(count($relateds) >= 1)
<h3 class="cart__popup-related-title center-xs">Você também pode gostar desses:</h3>
<div class="jas-row">
    @foreach($relateds as $related)
        @if($loop->index <= 3)
            <div class="jas-col-xs-6 jas-col-md-3">
                <div class="popup__cart-product center-xs">
                    <a href="{{route('product', $related['slug'])}}">
                        <img width="118" height="118" alt="{{$related['name']}}" title="{{$related['name']}}" src="{{urf($configImg['normal']['C']['path'].$related['image'])}}" class="attachment-150x150 size-150x150 wp-post-image" srcset="{{urf($configImg['normal']['C']['path'].$related['image'])}}" sizes="(max-width: 118px) 100vw, 118px" />
                    </a>
                    <h4 class="ls__0"><a href="{{route('product', $related['slug'])}}">{{$related['name']}}</a></h4>
                    <p>Ref: {{$related['code']}}</p>
                </div>
            </div>
        @endif
    @endforeach
</div>
@endif