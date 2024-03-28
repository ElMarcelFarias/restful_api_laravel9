<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSerieFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {
        return Serie::all();
    }

    public function store(StoreUpdateSerieFormRequest $request) {  
        dd($request->all());
    }
}
