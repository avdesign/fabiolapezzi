<?php

namespace AVD\Models;

use AVD\Events\ContactCreatedEvent;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'subject_id',
        'user_id',
        'subject',
        'name',
        'email',
        'phone',
        'cell',
        'type',
        'message',
        'return',
        'ip',
        'city',
        'state',
        'zip_code',
        'latitude',
        'longitude',
        'admin',
        'send',
        'client',
        'status'
    ];

    /**
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => ContactCreatedEvent::class,
    ];

    /**
     * Validate
     **/
    public function rules()
    {
        return [
            'subject_id' => "required|numeric",
            'name'       => "required",
            'email'      => "required|email",
            'cell'       => "required|celular_com_ddd",
            'message'    => "required"
        ];
    }

    /**
     * Profile
     * @return mixed
     **/
    public function configSubject()
    {
        return $this->belongsTo(ConfigSubjectContact::class, 'subject_id');
    }
}
