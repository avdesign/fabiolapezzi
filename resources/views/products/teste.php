<?php

$cart_total = '<span class= "woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">RS</span>0.00</span>';
$widget_shopping_cart_content  = '<div class="widget_shopping_cart_content">';
$widget_shopping_cart_content .= '<ul class="cart_list product_list_widget">';
$widget_shopping_cart_content .= '<li class="empty">No products in the cart.</li>';
$widget_shopping_cart_content .= '</ul>';
$widget_shopping_cart_content .= '</div>';

$cart_contents  = '<a class="cart-contents pr cb chp db" href="#" title="View your shopping cart">';
$cart_contents .= '<i class="pe-7s-shopbag"></i><span class="pa count bgb br__50 cw tc">0</span></a>';



$output = array(
    "ptotal" => 0,
    "quantity" => 0,
    "cart_total" => $cart_total,
    "ajax_fragm" => array(
        "fragments" => array(
            "div.widget_shopping_cart_content" => $widget_shopping_cart_content,
            "a.cart-contents" => $cart_contents,
            "cart_hash" => "",
            "items_count" => ""
        )
    )
);

