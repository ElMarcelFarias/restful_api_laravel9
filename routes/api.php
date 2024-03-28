<?php

use App\Http\Controllers\SeriesController;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//todas as rotas que foram implementadas dentro do arquivo api.php já tem o sufixo na url API
//então não é necessário colocar api/series, apenas /series

Route::get('/series', function () {
    // return [
    //     'Supernatural',
    //     'Game of Thrones'
    // ];

    //Se eu retorno uma model ou um collection o proprio laravel já sabe como retornar, segue exemplo:
    //return \App\Models\User::all();
    return Serie::all();
});

Route::apiResource('/series', SeriesController::class); //Aqui é uma função que cria todas as rotas padrão de uma vez só
// Route::get('/series', [SeriesController::class, 'index']);
// Route::post('/series', [SeriesController::class, 'store']);