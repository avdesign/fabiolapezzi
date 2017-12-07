$html  = '<div class="widget_shopping_cart_content">';
    $html .= '<ul class="cart_list product_list_widget ">';
        $html .= '<li class="mini_cart_item">';
            $html .= '<a href="'.route('remove').'" class="remove" title="Remove this item" data-product_id="4956" data-product_sku="">&times;</a>';
            $html .= '<a href="'.route('view').'">';
                $html .= '<img width="160" height="215" src="//janstudio.net/claue/demo/wp-content/uploads/2016/09/p5-4-160x215.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />';
                $html .= 'Nome do Produto';
            $html .= '</a>';
            $html .= '<span class="quantity">1 &times; <span class="woocommerce-Price-amount amount">'+
                $html .= '<span class="woocommerce-Price-currencySymbol">R$ </span>35.00</span>';
            $html .= '</span>';
        $html .= '</li>';
    $html .= '</ul>';
    $html .= '<p class="total"><strong>Subtotal:</strong>';
        $html .= '<span class="woocommerce-Price-amount amount">';
            $html .= '<span class="woocommerce-Price-currencySymbol">R$ </span>70.00';
        $html .= '</span>';
    $html .= '</p>';
    $html .= '<p class="buttons">';
        $html .= '<a href="'.route('cart').'" class="button wc-forward">Ver Ordem</a>';
        $html .= '<a href="'.route('order').'" class="button checkout wc-forward">Enviar</a>';
    $html .= '</p>';
$html .= '</div>';

$total  = '<a class="cart-contents pr cb chp db" href="#" title="View your shopping cart">';
    $total .= '<i class="pe-7s-shopbag"></i>';
    $total .= '<span class="pa count bgb br__50 cw tc">2</span>';
$total .= '</a>';


$out = array(
    "fragments" => array (
        "div.widget_shopping_cart_content" => $html,
        "a.cart-contents" => $total,
        "cart_hash" => "0befc4f1367d4bf7341fb19d577d37a1"
    )
);