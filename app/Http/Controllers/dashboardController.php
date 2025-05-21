<?php

namespace App\Http\Controllers;

use App\Models\proyecto;
use App\Models\tareasProyecto;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view("dashboard");
    }

    public function tTareas(){
        $completadas = tareasProyecto::where ('estado','=','4')->get();
        $noCompletadas = tareasProyecto::where ('estado','>=','1', 'and','estado','<','4')->get();
        $totales['completadas'] = $completadas->count();
        $totales['noCompletadas'] = $noCompletadas->count();
        $totales['total'] = $completadas->count() + $noCompletadas->count();
        return $totales;
    }

    public function tProyectos(){
        $completadas = proyecto::where ('estado','=','3')->get();
        $noCompletadas = proyecto::where ('estado','>=','1','and','estado','<','3')->get();
        $totales['completadas'] = $completadas->count();
        $totales['noCompletadas'] = $noCompletadas->count();
        $totales['total'] = $completadas->count() + $noCompletadas->count();
        return $totales;
    }

    public function tareas(){
        $tareas = tareasProyecto::all();

        return $tareas;
    }
}
