<?php

namespace AVD\Models;

use AVD\Events\UserCreatedEvent;
use AVD\Mail\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'profile_id',
        'first_name',
        'last_name',
        'email',
        'document1',
        'document2',
        'phone',
        'cell',
        'admin',
        'token',
        'password',
        'status',
        'newsletter',
        'ip',
        'visits',
        'last_login',
        'logout'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $dispatchesEvents = [
        'created' => UserCreatedEvent::class,
    ];


    /**
     * adresses
     * @return array
     **/
    public function adresses()
    {
        return $this->hasMany(UserAddress::class);
    }

    /**
     * Profile
     * @return mixed
     **/
    public function profile()
    {
        return $this->belongsTo(ConfigProfileClient::class, 'profile_id');
    }


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        \Mail::to($this->email)->send(new ResetPassword($token));
    }



}
