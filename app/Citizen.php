<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'gender',
        'mobile',
        'city_id',
        'account_id'
    ];
}
