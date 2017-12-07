<?php

namespace AVD\Http\Controllers;

use AVD\Interfaces\ConfigImageProductInterface as ConfigImages;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;
use AVD\Interfaces\ConfigSiteInterface as ConfigSite;
use AVD\Interfaces\ImageColorInterface as InterColor;
use AVD\Interfaces\SectionInterface as InterSection;
use AVD\Interfaces\UserInterface as InterUser;
use AVD\Interfaces\WishlistInterface as InterModel;
use AVD\Models\Related;
use Illuminate\Http\Request;
use Auth;


class WishlistController extends Controller
{

    /**
     * WishlistController constructor.
     * @param InterUser $interUser
     * @param InterModel $interModel
     * @param ConfigSite $configSite
     * @param InterColor $interColor
     * @param InterSection $interSection
     * @param ConfigKeyword $configKeyword
     */
    public function __construct(
        InterUser $interUser,
        InterModel $interModel,
        ConfigSite $configSite,
        InterColor $interColor,
        ConfigImages $configImages,
        InterSection $interSection,
        ConfigKeyword $configKeyword)
    {
        $this->middleware('auth');

        $this->interUser     = $interUser;
        $this->configSite    = $configSite;
        $this->configImages  = $configImages;
        $this->interColor    = $interColor;
        $this->interModel    = $interModel;
        $this->interSection  = $interSection;
        $this->configKeyword = $configKeyword;

    }


    public function index()
    {
        $configKeyword  = $this->configKeyword->random();
        $configSite     = $this->configSite->setId(1);
        $sections       = $this->interSection->getAll();

        return view('wishlists.index-1', compact('configKeyword','configSite','sections'));
    }


    public function add()
    {
        $wishlist[] = array(
            "ID" =>  "47",
            "user_id"  => "57",
            "wishlist_slug" => "",
            "wishlist_name" =>  "",
            "wishlist_token" =>  str_random(25),
            "wishlist_privacy" => "0",
            "is_default" =>  "1"
        );

        $out = array(
            "result" => "true",
            "message" => "Produto Adicionado",
            "user_wishlists" =>  $wishlist,
            "wishlist_url" => "url-da-lista-de-desejo"
        );

        return response()->json($out);
    }

    public function addProduct(Request $request)
    {

        $action = $request->action;
        if ($action == 'jas_shipping_return') {

            return view('helps.popup-help-1');

        } else {

            $user       = $this->interUser->setId(Auth::user()->id);
            $grid       = $request->attribute_pa_size;
            $color      = $this->interColor->setId($request->variation_id);
            $product    = $color->product;

            $wishlist = $this->interModel->setProduct($user->id, $grid, $color->id);
            if ($wishlist) {
                $input = [
                    'quantity' => $request->quantity
                ];
                $data = $this->interModel->update($input, $wishlist->id);

            } else {

                $prices = $product->prices;
                foreach ($prices as $price) {
                    if ($price->config_profile_client_id == $user->profile_id) {
                        if ($product->offer == 1) {
                            $percent = $price->offer_percent;
                            $price_card = $price->offer_card;
                            $price_cash = $price->offer_cash;
                        } else {
                            $percent = $price->price_cash_percent;
                            $price_card = $price->price_card;
                            $price_cash = $price->price_cash;
                        }
                    }
                }

                $insert = [
                    'user_id' => $user->id,
                    'key' => md5($user->id.time()),
                    'product_id' => $request->product_id,
                    'image_color_id' => $color->id,
                    'grid' => $grid,
                    'quantity' => $request->quantity,
                    'image' => $color->image,
                    'color' => $request->attribute_pa_color,
                    'code' => $color->code,
                    'profile' => $user->profile_id,
                    'offer' => $product->offer,
                    'percent' => $percent,
                    'price_card' => $price_card,
                    'price_cash' => $price_cash,
                    'slug' => $color->slug,
                    'kit' => $color->kit,
                    'kit_name' => $color->kit_name,
                    'name' => $product->name,
                    'category' => $product->category,
                    'section' => $product->section,
                    'brand' => $product->brand,
                    'unit' => $product->unit,
                    'measure' => $product->measure,
                    'weight' => $product->weight,
                    'width' => $product->width,
                    'height' => $product->height,
                    'length' => $product->length,
                    'cost' => $product->cost,
                    'ip' => $request->ip()
                ];

                $data = $this->interModel->create($insert);
            }

            if ($data) {

                $configImg    = [];
                $configImages = $this->configImages->getAll();
                foreach ($configImages as $i){
                    if ($i->default == 'T') {
                        $configImg['thumb'][$i->type]['path'] = $i->path;
                        $configImg['thumb'][$i->type]['width'] = $i->width;
                        $configImg['thumb'][$i->type]['height'] = $i->height;
                    }
                    if ($i->default == 'N') {
                        $configImg['normal'][$i->type]['path'] = $i->path;
                        $configImg['normal'][$i->type]['width'] = $i->width;
                        $configImg['normal'][$i->type]['height'] = $i->height;
                    }
                    if ($i->default == 'G') {
                        $configImg['large'][$i->type]['path'] = $i->path;
                        $configImg['large'][$i->type]['width'] = $i->width;
                        $configImg['large'][$i->type]['height'] = $i->height;
                    }
                    if ($i->default == 'Z') {
                        $configImg['zoom'][$i->type]['path'] = $i->path;
                        $configImg['zoom'][$i->type]['width'] = $i->width;
                        $configImg['zoom'][$i->type]['height'] = $i->height;
                    }
                }

                $wishlists = $this->interModel->getList($user->id);
                $relateds  = Related::getRelateds($wishlists);
                $redirect  = route('product', $color->slug);
                $html  = view('wishlists.wishlist-popup-1', compact('configImg','wishlists','redirect','relateds'))->render();
                $out = array(
                    "pname" => $product->name,
                    "output" => $html,
                    "pimg" => $color->image
                );
                return response()->json($out);
            }
        }
    }

    /**
     * @param Request $request
     */
    public function update(Request $request)
    {
        $acition   = $request->action;
        $new_qty   = $request->new_qty;
        $undo_item = $request->undo_item;
        $key       = $request->cart_key;

        $item      = $this->interModel->setKey($key);

        if ($undo_item == 'false') {
            if ($new_qty == 0) {

                if (!session()->has($key)) {
                    session()->put($key, $item);
                }
                $data = $this->interModel->delete($item->id);

            } else {
                $input = [
                    'quantity' => $new_qty
                ];
                $data = $this->interModel->update($input, $item->id);
            }

        }

        if ($undo_item == 'true') {

            if (session()->has($key)) {

                $undo    = session()->get($key);
                $new_qty = $undo->quantity;

                $insert = [
                    'user_id' => $undo->user_id,
                    'key' => $key,
                    'product_id' => $undo->product_id,
                    'image_color_id' => $undo->image_color_id,
                    'grid' => $undo->grid,
                    'quantity' => $undo->quantity,
                    'image' => $undo->image,
                    'color' => $undo->color,
                    'code' => $undo->code,
                    'profile' => $undo->profile,
                    'offer' => $undo->offer,
                    'percent' => $undo->percent,
                    'price_card' => $undo->price_card,
                    'price_cash' => $undo->price_cash,
                    'slug' => $undo->slug,
                    'kit' => $undo->kit,
                    'kit_name' => $undo->kit_name,
                    'name' => $undo->name,
                    'category' => $undo->category,
                    'section' => $undo->section,
                    'brand' => $undo->brand,
                    'unit' => $undo->unit,
                    'measure' => $undo->measure,
                    'weight' => $undo->weight,
                    'width' => $undo->width,
                    'height' => $undo->height,
                    'length' => $undo->length,
                    'cost' => $undo->cost,
                    'ip' => $undo->ip
                ];

                $data = $this->interModel->create($insert);
                if ($data) {
                    session()->forget($key);
                }
            }

        }

        $user      = $this->interUser->setId(Auth::user()->id);
        $wishlists = $this->interModel->getList($user->id);

        $total_cash  = '0.00';
        $total_card  = '0.00';
        $ptotal_cash = '0.00';
        $ptotal_card = '0.00';
        foreach ($wishlists as $wishlist) {
            $total_cash += $wishlist->price_cash * $wishlist->quantity * $wishlist->unit;
            $total_card += $wishlist->price_card * $wishlist->quantity * $wishlist->unit;
            if ($wishlist->key == $key) {
                $ptotal_cash = $wishlist->price_cash * $wishlist->quantity * $wishlist->unit;
                $ptotal_card = $wishlist->price_card * $wishlist->quantity * $wishlist->unit;
            }
        }

        $cart_total = '<span class= "woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.setReal($total_cash).'<br> '.setReal($total_card).'</span></span>';
        $widget_shopping_cart_content  = '<div class="widget_shopping_cart_content">';
        $widget_shopping_cart_content .= '<ul class="cart_list product_list_widget">';
        $widget_shopping_cart_content .= '<li class="empty">Sua lista de desejos está vazia.</li>';
        $widget_shopping_cart_content .= '</ul>';
        $widget_shopping_cart_content .= '</div>';

        $cart_contents  = '<a class="cart-contents pr cb chp db" href="#" title="Veja sua lista">';
        $cart_contents .= '<i class="pe-7s-shopbag"></i><span class="pa count bgb br__50 cw tc">0</span></a>';

        $output = array(
            "ptotal" => setReal($ptotal_cash).'<br>'.setReal($ptotal_card),
            "quantity" => $new_qty,
            "cart_total" => $cart_total,
            "ajax_fragm" => array(
                "fragments" => array(
                    "div.widget_shopping_cart_content" => $widget_shopping_cart_content
                ),
                "a.cart-contents" => $cart_contents

            ),
            "cart_hash" => "",
            "items_count" => ""
        );

        return response()->json($output);


    }
}
