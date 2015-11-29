<?php

namespace App\Http\Controllers;

use App\Citizen;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CitizensController extends Controller
{
    public function show()
    {
        $citizens = Citizen::all();

        return $citizens;
    }

    public function store()
    {
        $input = Citizen::all();

        Citizen::create($input);

        return $input;
    }
}
