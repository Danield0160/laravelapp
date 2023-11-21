<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use App\Models\Libro;
use Illuminate\Support\Facades\Route;

class InicioController extends Controller
{
    public function index(){
        if(!session("usuario")){
            return redirect("/");
        }
        $libros = Libro::all();
        return view("inicio",["libros" => $libros]);
    }
}