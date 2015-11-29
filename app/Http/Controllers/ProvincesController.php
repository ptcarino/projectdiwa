<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProvincesController extends Controller
{
    public function show()
    {
        $provinces = Province::all();

        return $provinces;
    }

    public function store()
    {
        $input = Province::all();

        Province::create($input);

        return $input;
    }
}
