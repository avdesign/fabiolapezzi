<div class="widget_shopping_cart_content">
    <ul class="cart_list product_list_widget ">
        <li class="mini_cart_item">
            <a href="{{route('cart.remove', '3')}}" class="remove" title="Remover este item" data-product_id="4956" data-product_sku="">&times;</a>
            <a href="#">
                <img width="160" height="160" src="{{url('assets/imagens/produtos/235/cor-4.jpg')}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" /> Nome do Produto
            </a>
            <span class="quantity">1 &times; <span class="woocommerce-Price-amount amount">
            <span class="woocommerce-Price-currencySymbol">R$ </span>35.00</span>
            </span>
        </li>
        <li class="mini_cart_item">Seu carrinho está vazio.</li>
    </ul>
    <p class="total"><strong>Subtotal:</strong>
        <span class="woocommerce-Price-amount amount">
            <span class="woocommerce-Price-currencySymbol">R$ </span>70.00
        </span>
    </p>
    <p class="buttons">
        <a href="{{route('cart')}}" class="button wc-forward">Finalizar</a>
        <a href="{{route('checkout')}}" class="button checkout wc-forward">Enviar Ordem</a>
    </p>
</div>

<a class="cart-contents pr cb chp db" href="{{route('cart')}}" title="Minha ordem">
    <i class="pe-7s-shopbag"></i>
    <span class="pa count bgb br__50 cw tc">2</span>
</a>