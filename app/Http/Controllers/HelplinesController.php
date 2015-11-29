<?php

namespace App\Http\Controllers;

use App\Helpline;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HelplinesController extends Controller
{
    public function create()
    {
        return view('helpline.create');
    }

    public function show()
    {
        $helpline = Helpline::all();

        return $helpline;
    }

    public function store()
    {
        $input = Helpline::all();

        Helpline::create($input);

        return $input;
    }
}
