<?php

namespace App\Http\Controllers;

use App\Models\estadoProyecto;
use Illuminate\Http\Request;

class estadoProyectoController extends Controller
{
    //

    public function getAll(){

        $estadoProyecto = estadoProyecto::all();

        return $estadoProyecto;

    }
}
