<h3 class="cart__popup-title center-xs">SUA LISTA DE DESEJOS</h3>
@php
    $total_cash = '0.00';
    $total_card = '0.00';
@endphp
@foreach($wishlists as $wishlist)
    @php
        $total_cash += $wishlist->price_cash * $wishlist->quantity * $wishlist->unit;
        $total_card += $wishlist->price_card * $wishlist->quantity * $wishlist->unit;

        $item =  array(
            "key" => $wishlist->key,
            "pid" => $wishlist->id,
            "pname" => $wishlist->color.'/'.$wishlist->grid
        );
        $data_item = json_encode($item);


    @endphp


    <div class="cart__popup-item flex middle-xs" data-cart-item="{{$data_item}}">
        <div class="cart__popup-thumb">
            <img width="80" height="102" src="{{urf($configImg['thumb']['C']['path'].$wishlist->image)}}"
                 class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="{{$wishlist->name}} {{$wishlist->code}}"
                 srcset="{{urf($configImg['thumb']['C']['path'].$wishlist->image)}} {{urf($configImg['thumb']['C']['width'])}}w,
                         {{urf($configImg['normal']['C']['path'].$wishlist->image)}} {{urf($configImg['normal']['C']['width'])}}w,
                         {{urf($configImg['large']['C']['path'].$wishlist->image)}} {{urf($configImg['large']['C']['width'])}}w,
                         {{urf($configImg['zoom']['C']['path'].$wishlist->image)}} {{urf($configImg['zoom']['C']['width'])}}w"
                 sizes="(max-width: 80px) 100vw, 80px" />
        </div>

        @if($wishlist->kit == 1)
            <div class="cart__popup-title grow">
                <a href="{{route('product', $wishlist->slug)}}">{{$wishlist->name}}</a>

                <p>
                    <i class="fa fa-angle-right"></i> {{$wishlist->color}} <i class="fa fa-angle-right"></i> {{$wishlist->code}}<br>
                    <i class="fa fa-angle-right"></i> Und: À Vista {{setReal($wishlist->price_cash)}}<br>
                    <i class="fa fa-angle-right"></i> Und: Parcelado {{setReal($wishlist->price_card)}}<br>
                    <i class="fa fa-angle-right"></i> {{$wishlist->kit_name}} {{$wishlist->unit}} {{$wishlist->measure}}
                    <i class="fa fa-angle-right"></i> {{$wishlist->grid}}
                </p>
            </div>
            <div class="cart__popup-price">
                <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">
                        à vista {{setReal($wishlist->price_cash * $wishlist->unit)}}<br>
                        parcelado {{setReal($wishlist->price_card * $wishlist->unit)}}
                    </span>
                </span>
            </div>

        @else
            <div class="cart__popup-title grow">
                <a href="{{route('product', $wishlist->slug)}}">{{$wishlist->name}}</a>
                <p>
                    <i class="fa fa-angle-right"></i> {{$wishlist->color}} <i class="fa fa-angle-right"></i> {{$wishlist->code}}<br>
                    <i class="fa fa-angle-right"></i> {{$wishlist->unit}} {{$wishlist->measure}}
                    <i class="fa fa-angle-right"></i> {{$wishlist->grid}}
                </p>
            </div>
            <div class="cart__popup-price">
                <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">à vista {{setReal($wishlist->price_cash)}}<br>parcelado {{setReal($wishlist->price_card)}}</span>
                </span>
            </div>
        @endif
        <div class="cart__popup-quantity">
            <div class="quantity pr flex">
                <a class="cart__popup-qty cart__popup-qty--minus tc" href="javascript:void(0);">-</a>
                <input type="number" class="cart__popup-qty--input tc" max="" min="1" step="1" value="{{$wishlist->quantity}}">
                <a class="xcp-plus cart__popup-qty cart__popup-qty--plus tc" href="javascript:void(0);">+</a>
            </div>
        </div>
        @if($wishlist->kit == 1)
            <div class="cart__popup-total fwsb cb">
                <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">
                        {{setReal($wishlist->price_cash * $wishlist->quantity * $wishlist->unit)}}<br>
                        {{setReal($wishlist->price_card * $wishlist->quantity * $wishlist->unit)}}
                    </span>
                </span>
            </div>
        @else
            <div class="cart__popup-total fwsb cb">
                <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">
                        {{setReal($wishlist->price_cash * $wishlist->quantity)}}<br>
                        {{setReal($wishlist->price_card * $wishlist->quantity)}}
                    </span>
                </span>
            </div>
        @endif
        <div class="cart__popup-remove"><i class="fa fa-trash"></i></div>
    </div>
@endforeach

<div class="flex between-xs tc cart__popup-action">
    <a href="{{$redirect}}" class="button mt__20">Retornar</a>
    <a href="#" class="checkout-button button mt__20">Enviar Lista</a>
</div>
<div class="flex center-xs middle-xs cb fs__20 mt__20">
    <span class="mr__10">Subtotal: </span>
    <span class="cart__popup-stotal fwb ml__10">
        <span class="woocommerce-Price-amount amount">
            <span class="woocommerce-Price-currencySymbol">{{setReal($total_cash)}}</span>
        </span>
    </span>
</div>


@include('relateds.related-popup')


