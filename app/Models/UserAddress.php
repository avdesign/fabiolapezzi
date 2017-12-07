<?php

namespace AVD\Models;

use AVD\Events\UserUpdateAddressEvent;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'user_id',
        'delivery',
        'invoice',
        'address',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'zip_code'
    ];

    protected $dispatchesEvents = [
        'updated' => UserUpdateAddressEvent::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
