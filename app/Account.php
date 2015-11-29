<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'username',
        'password',
        'email',
        'role'
    ];
}
