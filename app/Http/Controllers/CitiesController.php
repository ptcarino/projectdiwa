<?php

namespace App\Http\Controllers;

use App\City;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CitiesController extends Controller
{
    public function create()
    {
        return view('city.create');
    }

    public function index()
    {
        $cities = City::all();

        return $cities;
    }

    public function store()
    {
        $input = Request::all();

        City::create($input);

        return redirect('cities');
    }
}
