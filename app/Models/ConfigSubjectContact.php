<?php

namespace AVD\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigSubjectContact extends Model
{
    protected $fillable = [
        'subject',
        'message',
        'order',
        'status',
        'send'
    ];
}
