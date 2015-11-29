<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoBulletin extends Model
{
    protected $fillable = [
        'content',
        'time_posted',
        'rro_id',
        'citizen_id'
    ];
}
