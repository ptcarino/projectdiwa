<?php

namespace App\Http\Controllers;

use App\City;
use App\Shelter;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SheltersController extends Controller
{
    public function create()
    {
        $city = City::lists('name', 'id');

        return view('shelter.create', compact('city', $city));
    }

    public function index()
    {
        $shelters = Shelter::all();

        return $shelters;
    }

    public function store()
    {
        $input = Request::all();

        Shelter::create($input);

        return redirect('shelters');
    }
}
