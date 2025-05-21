<?php

namespace App\Http\Controllers;

use App\Models\estadoTarea;
use Illuminate\Http\Request;

class estadoTareasController extends Controller
{
    

    public function getAll (){

        $estadoTarea = estadoTarea::all();

        return $estadoTarea;

    }

}
