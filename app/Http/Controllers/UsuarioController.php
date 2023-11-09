<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __invoke() //se utiliza el invoke cuando solo es para una ruta(?
    {
        return view('usuarios');
    }


    public function index(){
        $dic = [['num' => 'uno'],['num' => 'dos'],['num' => 'tres']];
        return view('usuarios', ['dic' => $dic]);
    }
    public function create(){}

    public function show(){
    }
}