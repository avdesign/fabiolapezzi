<?php

namespace AVD\Models;

use Illuminate\Database\Eloquent\Model;

use Session;

class Related extends Model
{
    private $items = [];

    /**
     * Related constructor.
     */
    public function __construct()
    {
        if (Session::has('related')) {
            $related = Session::get('related');
            $this->items = $related->items;
        }
    }


    public function add(Category $category)
    {
        foreach ($category->products()->where('active', 1)->inRandomOrder()->limit(10)->get() as $product) {
            foreach ($product->images()->where('active', 1)->orderBy('cover', 'desc')->limit(1)->get() as $img) {
                $this->items[$product->id] = [
                    "product_id" => $product->id,
                    "image_color_id" => $img->id,
                    "name" => $product->name,
                    "slug" => $img->slug,
                    "image" => $img->image,
                    "code" => $img->code
                ];
            }
        }

    }

    public function getItems()
    {
        return $this->items;
    }


    static function getRelateds($wishlists)
    {
        foreach($wishlists as $wishlist){
            $arrayWishlist[$wishlist->product_id] = [
                "product_id" => $wishlist->product_id,
                "image_color_id" => $wishlist->image_color_id,
                "name" => $wishlist->name,
                "slug" => $wishlist->slug,
                "image" => $wishlist->image,
                "code" => $wishlist->code
            ];
        }
        //Products Related
        $items  = Session::get('related');
        $items  = $items->getItems();
        $random = [];
        foreach ($items as $key => $item) {
            if(array_key_exists($key,$arrayWishlist) == false) {
                $random[$key] = [
                    "product_id" => $item['product_id'],
                    "image_color_id" => $item['image_color_id'],
                    "name" => $item['name'],
                    "slug" => $item['slug'],
                    "image" => $item['image'],
                    "code" => $item['code']
                ];
            }
        }
        (count($random) >= 4 ? $relateds = array_random($random, 4) : $relateds = $random);

        return $relateds;

    }
}
