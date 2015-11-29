<?php

namespace App\Http\Controllers;

use App\Citizen;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CitizensController extends Controller
{
    public function create()
    {
        return view('citizen.create');
    }

    public function index()
    {
        $citizens = Citizen::all();

        return $citizens;
    }

    public function store()
    {
        $input = Request::all();

        Citizen::create($input);

        return redirect('citizens');
    }
}
