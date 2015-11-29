<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CitiesController extends Controller
{
    public function show()
    {
        $cities = City::all();

        return $cities;
    }

    public function store()
    {
        $input = City::all();

        City::create($input);

        return $input;
    }
}
