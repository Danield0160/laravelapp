<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("usuarios")->insert([
            "id"=>0,
            "nombre"=>"Admin",
            "clave"=>"Csas1234",
            "admin"=>1
        ]);
        DB::table("usuarios")->insert([
            "id"=>1,
            "nombre"=>"Daniel",
            "clave"=>"Csas1234",
            "admin"=>1
        ]);
        DB::table("usuarios")->insert([
            "id"=>2,
            "nombre"=>"Pedro",
            "clave"=>"Csas1234",
            "admin"=>1
        ]);
        DB::table("usuarios")->insert([
            "id"=>3,
            "nombre"=>"Aitziber",
            "clave"=>"Csas1234",
            "admin"=>1
        ]);
        DB::table("usuarios")->insert([
            "id"=>4,
            "nombre"=>"Acaymo",
            "clave"=>"Csas1234",
            "admin"=>1
        ]);
        DB::table("usuarios")->insert([
            "id"=>5,
            "nombre"=>"Alberto",
            "clave"=>"Csas1234",
            "admin"=>1
        ]);


        
        DB::table("libros")->insert([
            "id"=>0,
            "nombre"=>"Cenicienta",
            "unidades"=>5
        ]);
        DB::table("libros")->insert([
            "id"=>1,
            "nombre"=>"pocahontas",
            "unidades"=>1
        ]);
        DB::table("libros")->insert([
            "id"=>2,
            "nombre"=>"El quijote",
            "unidades"=>10
        ]);
        DB::table("libros")->insert([
            "id"=>3,
            "nombre"=>"Willy wonka",
            "unidades"=>4
        ]);
    }
}
