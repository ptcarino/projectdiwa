<?php

namespace App\Http\Controllers;

use App\Shelter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SheltersController extends Controller
{
    public function show()
    {
        $shelters = Shelter::all();

        return $shelters;
    }

    public function store()
    {
        $input = Shelter::all();

        Shelter::create($input);

        return $input;
    }
}
