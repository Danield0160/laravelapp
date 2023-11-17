<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

class PokemonController extends Controller{
    public function show($numero){
        $path = "https://pokeapi.co/api/v2/pokemon/?offset=0&limit=1292"; //public_path()."\pokemon.json"; // puedes poner el json en storage y utilizar storage_path()
        $content = json_decode(file_get_contents($path),true);

        if($numero>0){
            return view("pokemon",["pokemon"=>$content["results"][$numero-1]]); 
        }
        return redirect()->route("pokemonLista");
    }
}