<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// debugbar()->info("a");

Route::view("/","pokemonLista")->name("pokemonLista");
Route::get('/pokemon/{numero}',[PokemonController::class,"show"]);
