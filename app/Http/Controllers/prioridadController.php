<?php

namespace App\Http\Controllers;

use App\Models\prioridad;
use Illuminate\Http\Request;

class prioridadController extends Controller
{
    //

    public function Getall(){

        $prioridad = prioridad::all();

        return $prioridad;
    }
}
