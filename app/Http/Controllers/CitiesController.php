<?php

namespace App\Http\Controllers;

use App\City;
use App\Province;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CitiesController extends Controller
{
    public function create()
    {
        $province = Province::lists('name', 'id');
        $page_title = 'Cities';

        return view('city.create', compact('province', 'page_title'));
    }

    public function index()
    {
        $cities = City::all();
        $page_title = 'Cities';

        return view('city.index', compact('cities', 'page_title'));
    }

    public function store()
    {
        $input = Request::all();

        City::create($input);

        return redirect('cities');
    }
}
