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
        $page_title = 'Shelters';

        return view('shelter.create', compact('city', 'page_title'));
    }

    public function index()
    {
        $shelters = Shelter::all();
        $page_title = 'Shelters';

        return view('shelter.index', compact('shelters', 'page_title'));
    }

    public function store()
    {
        $input = Request::all();

        Shelter::create($input);

        return redirect('shelters');
    }
}
