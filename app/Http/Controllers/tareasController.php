<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tareasController extends Controller
{
    public function index()
    {
        return view("tareas");
    }
}
