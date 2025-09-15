<?php

namespace App\Http\Controllers;

use App\Models\rolUsuario;
use Illuminate\Http\Request;

class rolUsuarioController extends Controller
{
    //

    public function getAll (){

    $rolUsuario = rolUsuario::all();

    return $rolUsuario;

    }
}
