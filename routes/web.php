<?php

use App\Models\Serie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/series', function () {
    // return [
    //     'Supernatural',
    //     'Game of Thrones'
    // ];

    //Se eu retorno uma model ou um collection o proprio laravel já sabe como retornar, segue exemplo:
    //return \App\Models\User::all();
    return Serie::all();
});