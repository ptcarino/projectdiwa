<?php

namespace App\Http\Controllers;

use App\Province;
use App\Region;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ProvincesController extends Controller
{
    public function create()
    {
        $region = Region::lists('name', 'id');
        $page_title = 'Provinces';

        return view('province.create', compact('region', 'page_title'));
    }

    public function index()
    {
        $provinces = Province::all();
        $page_title = 'Provinces';

        return view('province.index', compact('provinces', 'page_title'));
    }

    public function store()
    {
        $input = Request::all();

        Province::create($input);

        return redirect('provinces');
    }
}
