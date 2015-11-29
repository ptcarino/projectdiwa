<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ProvincesController extends Controller
{
    public function create()
    {
        return view('province.create');
    }

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
