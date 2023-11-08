<?php

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

Route::view("/","principal")->name("pri");
Route::view("/usuarios","usuarios")->name("usr");
Route::view("/contacto","contacto")->name("con");
Route::view("/blog","blog")->name("blg");
