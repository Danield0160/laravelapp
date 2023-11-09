<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function show($curso)
    {
        return view('cursos.show', ['curso' => $curso]);
    }

    public function persona($persona)
    {

        return view('personas.' . $persona);

    }
}