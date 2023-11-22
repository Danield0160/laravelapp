<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InicioController;
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

// hace que el "home" sea la pagina de login 
Route::redirect("/","/login");


Route::get('/login', function () {
    if((session("usuario"))){
        return redirect("inicio");
    }
    return view('login'); 
});

// cuando envias el formulario de login lo comprueba y te dirige al inicio si esta bien
Route::post("/login", [LoginController::class ,"comprobar"]);

// la url de logout quita datos de la sesion y te dirige al login 
Route::get("/logout",function(){
    session(['usuario' => null]);
    return redirect("/login");
});

// pagina principal, te conectas cuando esta bien el login, parte [R: read]
Route::get("/inicio",[InicioController::class,"index"])->name("inicio");
