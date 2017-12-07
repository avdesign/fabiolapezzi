<?php

namespace AVD\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [
        'name',
        'email',
        'profile',
        'type',
        'city',
        'state',
        'zip_code',
        'latitude',
        'longitude',
        'day',
        'month',
        'token',
        'confirmed'
    ];

    /**
     * @return array
     **/
    public function rules($id='')
    {
        return [
            'email' => "required|email|unique:newsletters,email,{$id},id"
        ];
    }

}
