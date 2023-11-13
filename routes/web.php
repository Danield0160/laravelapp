<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    //$nombre = 'pepe';
    //$lista = ['perro','gato','avestruz'];
    $diccionario = [['num' => 'uno'],['num' => 'dos'],['num' => 'tres']];
    return view('principal', ['dic' => $diccionario]);
})->name('pri');

// Route::get("/usuarios", UsuarioController::class)->name("usr");
// Route::get("/usuarios", UsuarioController@show)->name("usr");

Route::get("/usuarios", [UsuarioController::class,'index'])->name("usr");

//Route::view("/","principal")->name("pri");
// Route::view("/usuarios","usuarios")->name("usr");
Route::view("/contacto","contacto")->name("con");
Route::view("/blog","blog")->name("blg");

Route::get("/cursos",[CursoController::class,'index'])->name("cur");
Route::get("cursos/{curso}",[CursoController::class,'show']);

// Route::view("/cursos","cursos/{curso}",[CursoController::class,'show'])->name("cur");
