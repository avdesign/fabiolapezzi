<?php

namespace AVD\Http\Controllers;

use Illuminate\Http\Request;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;


class CartController extends Controller
{
    /**
     * @var ConfigKeyword
     */
    private $configKeyword;

    public function __construct(ConfigKeyword $configKeyword)
    {
        $this->middleware('auth');

        $this->configKeyword = $configKeyword;
    }

    public function index()
    {
        $configKeyword  = $this->configKeyword->random();

        return view('carts.index-1', compact('configKeyword'));

    }


    public function update(Request $request)
    {
        dd($request->all());
        $configKeyword  = $this->configKeyword->random();

        return view('carts.index-1', compact('configKeyword'));

    }

    public function add(Request $request)
    {
        dd($request->all());

    }

    public function addProduct(Request $request)
    {

        $action = $request->action;
        if ($action == 'jas_shipping_return') {
            return view('helps.popup-help-1');
        } else {
            $cart  = '';
            $redirect = route('product', 'slug');
            $html  = view('carts.cart-popup-1', compact('cart','redirect'))->render();
            $out = array(
                "pname" => "Nome do Produto",
                "output" => $html,
                "pimg" => "IMAGEM AQUI"
            );

            return response()->json($out);
        }
        //return '{"pname":"Mercury Tee - White","output":"<h3 class=\"cart__popup-title center-xs\">Your order<\/h3><div class=\"cart__popup-item flex middle-xs\" data-cart-item=\"{&quot;key&quot;:&quot;388ff192968fa6e21e378d2ce54bda94&quot;,&quot;pid&quot;:5249,&quot;pname&quot;:&quot;&lt;a href=\\&quot;http:\\\/\\\/janstudio.net\\\/claue\\\/demo\\\/product\\\/mercury-tee\\\/\\&quot;&gt;Mercury Tee - White&lt;\\\/a&gt;&quot;}\"><div class=\"cart__popup-thumb\"><img width=\"80\" height=\"102\" src=\"\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-80x102.jpg\" class=\"attachment-shop_thumbnail size-shop_thumbnail wp-post-image\" alt=\"\" srcset=\"\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-80x102.jpg 80w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-118x150.jpg 118w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-235x300.jpg 235w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-768x980.jpg 768w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-803x1024.jpg 803w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-370x472.jpg 370w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32.jpg 870w\" sizes=\"(max-width: 80px) 100vw, 80px\" \/> <\/div><div class=\"cart__popup-title grow\"><a href=\"http:\/\/janstudio.net\/claue\/demo\/product\/mercury-tee\/\">Mercury Tee - White<\/a><\/div><div class=\"cart__popup-price\"><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>68.00<\/span><\/div><div class=\"cart__popup-quantity\"><div class=\"quantity pr flex\"><a class=\"cart__popup-qty cart__popup-qty--minus tc\" href=\"javascript:void(0);\">-<\/a><input type=\"number\" class=\"cart__popup-qty--input tc\" max=\"\" min=\"1\" step=\"1\" value=\"1\"><a class=\"xcp-plus cart__popup-qty cart__popup-qty--plus tc\" href=\"javascript:void(0);\">+<\/a><\/div><\/div><div class=\"cart__popup-total fwsb cb\"><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>68.00<\/span><\/div><div class=\"cart__popup-remove\"><i class=\"fa fa-trash\"><\/i><\/div><\/div><div class=\"flex between-xs tc cart__popup-action\"><a href=\"http:\/\/janstudio.net\/claue\/demo\/shop\/\" class=\"button mt__20\">Continue shopping<\/a><a href=\"http:\/\/janstudio.net\/claue\/demo\/checkout\/\" class=\"checkout-button button mt__20\">Proceed to checkout<\/a><\/div><div class=\"flex center-xs middle-xs cb fs__20 mt__20\"><span class=\"mr__10\">Subtotal: <\/span><span class=\"cart__popup-stotal fwb ml__10\"><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>68.00<\/span><\/span><\/div><h3 class=\"cart__popup-related-title center-xs\">You might also like<\/h3><div class=\"jas-row\"><div class=\"jas-col-xs-6 jas-col-md-3\"><div class=\"popup__cart-product center-xs\"><img width=\"118\" height=\"150\" src=\"http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p2-5.jpg\" class=\"attachment-150x150 size-150x150 wp-post-image\" alt=\"p2-5\" title=\"p2-5\" srcset=\"http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p2-5.jpg 870w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p2-5-118x150.jpg 118w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p2-5-235x300.jpg 235w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p2-5-768x980.jpg 768w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p2-5-803x1024.jpg 803w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p2-5-80x102.jpg 80w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p2-5-370x472.jpg 370w\" sizes=\"(max-width: 118px) 100vw, 118px\" \/><h4 class=\"ls__0\"><a href=\"http:\/\/janstudio.net\/claue\/demo\/product\/cyan-boheme\/\">Cyan Boheme<\/a><\/h4>\n\t<span class=\"price\"><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45.00<\/span><\/span>\n<button data-quantity=\"1\" data-product_id=\"5532\" data-product_sku=\"\" class=\"modal_btn_add_to_cart ls__0\">Select options<\/button><\/div><\/div><div class=\"jas-col-xs-6 jas-col-md-3\"><div class=\"popup__cart-product center-xs\"><img width=\"118\" height=\"150\" src=\"http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/10\/ck-1.jpg\" class=\"attachment-150x150 size-150x150 wp-post-image\" alt=\"ck-1\" title=\"ck-1\" srcset=\"http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/10\/ck-1.jpg 870w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/10\/ck-1-118x150.jpg 118w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/10\/ck-1-235x300.jpg 235w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/10\/ck-1-768x980.jpg 768w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/10\/ck-1-803x1024.jpg 803w\" sizes=\"(max-width: 118px) 100vw, 118px\" \/><h4 class=\"ls__0\"><a href=\"http:\/\/janstudio.net\/claue\/demo\/product\/calvin-klein-logo-sweatpants\/\">Calvin Klein Logo Sweatpants<\/a><\/h4>\n\t<span class=\"price\"><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>35.00<\/span><\/span>\n<button data-quantity=\"1\" data-product_id=\"5006\" data-product_sku=\"\" class=\"modal_btn_add_to_cart ls__0\">Add to cart<\/button><\/div><\/div><div class=\"jas-col-xs-6 jas-col-md-3\"><div class=\"popup__cart-product center-xs\"><img width=\"118\" height=\"150\" src=\"http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Bobbi_Chunky_Pom_Beanie2.jpg\" class=\"attachment-150x150 size-150x150 wp-post-image\" alt=\"bobbi_chunky_pom_beanie2\" title=\"bobbi_chunky_pom_beanie2\" srcset=\"http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Bobbi_Chunky_Pom_Beanie2.jpg 870w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Bobbi_Chunky_Pom_Beanie2-118x150.jpg 118w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Bobbi_Chunky_Pom_Beanie2-235x300.jpg 235w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Bobbi_Chunky_Pom_Beanie2-768x980.jpg 768w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Bobbi_Chunky_Pom_Beanie2-803x1024.jpg 803w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Bobbi_Chunky_Pom_Beanie2-80x102.jpg 80w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Bobbi_Chunky_Pom_Beanie2-370x472.jpg 370w\" sizes=\"(max-width: 118px) 100vw, 118px\" \/><h4 class=\"ls__0\"><a href=\"http:\/\/janstudio.net\/claue\/demo\/product\/cuffed-beanie\/\">Cuffed Beanie<\/a><\/h4>\n\t<span class=\"price\"><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>15.00<\/span><\/span>\n<button data-quantity=\"1\" data-product_id=\"5269\" data-product_sku=\"P15\" class=\"modal_btn_add_to_cart ls__0\">Select options<\/button><\/div><\/div><div class=\"jas-col-xs-6 jas-col-md-3\"><div class=\"popup__cart-product center-xs\"><img width=\"118\" height=\"150\" src=\"http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p8-1.jpg\" class=\"attachment-150x150 size-150x150 wp-post-image\" alt=\"p8-1\" title=\"p8-1\" srcset=\"http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p8-1.jpg 870w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p8-1-118x150.jpg 118w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p8-1-235x300.jpg 235w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p8-1-768x980.jpg 768w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p8-1-803x1024.jpg 803w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p8-1-80x102.jpg 80w, http:\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/09\/p8-1-370x472.jpg 370w\" sizes=\"(max-width: 118px) 100vw, 118px\" \/><h4 class=\"ls__0\"><a href=\"http:\/\/janstudio.net\/claue\/demo\/product\/short-sleeved-hoodie-with-step-hem\/\">Short Sleeved Hoodie With Step Hem<\/a><\/h4>\n\t<span class=\"price\"><del><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>35.00<\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>30.00<\/span><\/ins><\/span>\n<button data-quantity=\"1\" data-product_id=\"4938\" data-product_sku=\"P-05\" class=\"modal_btn_add_to_cart ls__0\">Select options<\/button><\/div><\/div><\/div>",
        //"pimg":"<img width=\"80\" height=\"102\" src=\"\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-80x102.jpg\" class=\"attachment-shop_thumbnail size-shop_thumbnail wp-post-image\" alt=\"\" srcset=\"\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-80x102.jpg 80w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-118x150.jpg 118w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-235x300.jpg 235w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-768x980.jpg 768w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-803x1024.jpg 803w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-370x472.jpg 370w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32.jpg 870w\" sizes=\"(max-width: 80px) 100vw, 80px\" \/>","ajax_fragm":{"fragments":{"div.widget_shopping_cart_content":"<div class=\"widget_shopping_cart_content\">\n\n<ul class=\"cart_list product_list_widget \">\n\n\t\n\t\t\t\t\t\t\t<li class=\"mini_cart_item\">\n\t\t\t\t\t\t<a href=\"http:\/\/janstudio.net\/claue\/demo\/cart\/?remove_item=388ff192968fa6e21e378d2ce54bda94&#038;_wpnonce=9b7401451d\" class=\"remove\" title=\"Remove this item\" data-product_id=\"5249\" data-product_sku=\"P14\">&times;<\/a>\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http:\/\/janstudio.net\/claue\/demo\/product\/mercury-tee\/\">\n\t\t\t\t\t\t\t\t<img width=\"80\" height=\"102\" src=\"\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-80x102.jpg\" class=\"attachment-shop_thumbnail size-shop_thumbnail wp-post-image\" alt=\"\" srcset=\"\/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-80x102.jpg 80w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-118x150.jpg 118w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-235x300.jpg 235w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-768x980.jpg 768w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-803x1024.jpg 803w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32-370x472.jpg 370w, \/\/janstudio.net\/claue\/demo\/wp-content\/uploads\/2016\/11\/Mercury_Tee32.jpg 870w\" sizes=\"(max-width: 80px) 100vw, 80px\" \/>Mercury Tee - White&nbsp;\t\t\t\t\t\t\t<\/a>\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t<span class=\"quantity\">1 &times; <span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>68.00<\/span><\/span>\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t<\/li>\n\t\t\t\t\t\n\t\n<\/ul><!-- end product list -->\n\n\n\t<p class=\"total\"><strong>Subtotal:<\/strong> <span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>68.00<\/span><\/p>\n\n\t\n\t<p class=\"buttons\">\n\t\t<a href=\"http:\/\/janstudio.net\/claue\/demo\/cart\/\" class=\"button wc-forward\">View cart<\/a><a href=\"http:\/\/janstudio.net\/claue\/demo\/checkout\/\" class=\"button checkout wc-forward\">Checkout<\/a>\t<\/p>\n\n\n\n<\/div>","a.cart-contents":"\t<a class=\"cart-contents pr cb chp db\" href=\"#\" title=\"View your shopping cart\">\n\t\t<i class=\"pe-7s-shopbag\"><\/i>\n\t\t<span class=\"pa count bgb br__50 cw tc\">1<\/span>\n\t<\/a>\n\t"},"cart_hash":"bc97265693710850370df1bea9e9da9e"},"items_count":1}';

    }
    /**
     * Refresh mini carrinho
     *
     */
    public function fragments(Request $request)
    {
        $id = 2;
        $carts = 1;
        $total = 1;

        $html_cart     = view('carts.mini-cart-1', compact('carts'))->render();
        $html_cart_qtd = view('carts.mini-cart-1-total', compact('total'))->render();

        $out = array(
            "fragments" => array (
                "div.widget_shopping_cart_content" => $html_cart,
                "a.cart-contents" => $html_cart_qtd,
                "cart_hash" => "0befc4f1367d4bf7341fb19d577d37a1"
            )
        );

        return response()->json($out);
    }

    /**
     * @param Request $request
     * @param $id
     */

    public function remove(Request $request, $id)
    {
        dd($id);
    }

    public function getRemove($id)
    {
            dd($id);
    }



}
