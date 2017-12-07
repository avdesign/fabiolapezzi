<?php

namespace AVD\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigProfileClient extends Model
{
    protected $fillable = [
        'order',
        'profile',
        'percent_cash',
        'percent_card',
        'sum',
        'status'
    ];
}
