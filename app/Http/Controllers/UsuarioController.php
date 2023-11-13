<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index() //se utiliza el invoke cuando solo es para una ruta(?
    {
        $usuarios = DB::table("usuario")->get();
        return view('usuarios',["users"=>$usuarios]);
    }


    // public function index(){
    //     $dic = [['num' => 'uno'],['num' => 'dos'],['num' => 'tres']];
    //     return view('usuarios', ['dic' => $dic]);
    // }
    public function create(){}

    public function show(){
    }

    
}