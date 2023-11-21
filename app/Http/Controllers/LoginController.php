<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    public function comprobar(Request $request){
        $nombre = $request->nombre;
        $password = $request->password;
        $miUsuario = Usuario::where("nombre",$nombre)->first();
        if(isset($request)){
            if($miUsuario && $miUsuario->clave == $password){
                session(['usuario' => $nombre]);
                return redirect("inicio");
            }else{
                session(['usuario' => null]);
                return view("login",["info"=>"ERROR, login fallido"]);
            }
        }
        return view("login");
    }
}