<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSerieFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{

    protected $model;

    public function __construct(Serie $serie){
        $this->model = $serie;
    }

    public function index() {
        return Serie::all();
    }

    public function store(StoreUpdateSerieFormRequest $request) {  
        
        return response()->json(Serie::create($request->all()), 201);

    }

    public function show($id) {
        
        //exemplos para pesquisar de relacionamentos entre tabelas encadeados

        //seasons é uma tabela que tem relacao com serie
        //episodies é uma tabela que tem relacao com seasons

        //$series = Serie::whereId($id)->with('seasons.episodies')->get();

        //get tras um array
        //first objeto

        if(!$serie = $this->model->find($id)) {
            return response()->json(['bad request','O servidor não pode encontrar o recurso solicitado.'], 404);
        }

        return $serie;
        //return $serie;
    }
}
