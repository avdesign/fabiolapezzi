<?php

namespace AVD\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
        'user_id',
        'key',
        'product_id',
        'image_color_id',
        'grid',
        'quantity',
        'image',
        'color',
        'code',
        'profile',
        'offer',
        'percent',
        'price_card',
        'price_cash',
        'slug',
        'kit',
        'kit_name',
        'name',
        'category',
        'section',
        'brand',
        'unit',
        'measure',
        'weight',
        'width',
        'height',
        'length',
        'cost',
        'ip'
    ];
}
