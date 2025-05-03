<?php

namespace App\Http\Controllers;

use App\Models\proyecto;
use Illuminate\Http\Request;

class proyectosController extends Controller
{

    public function index()
    {
        $proyectos = proyecto::all();

        //return $proyectos;
        return view("proyectos",compact('proyectos'));
    }

    public function show()
    {
        $proyectos = proyecto::all();

        //return $proyectos;
        return $proyectos;
    }


    public function create(Request $request){
        $proyectos = new proyecto();

        $proyectos->nombre = $request->nombre;
        $proyectos->idCliente = $request->cliente;
        $proyectos->estado = "1";
        $proyectos->fechaInicio = $request->fechaInicio;
        $proyectos->fechaFin = $request->fechaFin;
        $proyectos->descripcion = $request->descripcion;

        $proyectos->save(); 
        return ;
    }

    public function update(Request $request){
        $proyecto = proyecto::find($request->idProyecto);
        $proyecto-> nombre = $request -> nombre;
        $proyecto-> idCliente = $request -> cliente;
        $proyecto-> fechaInicio = $request -> fechaInicio;
        $proyecto-> fechaFin = $request -> fechaFin;
        $proyecto-> descripcion = $request -> descripcion;

        $proyecto->save();
        return;
    }

    public function delete(Request $request){
        $proyecto = proyecto::find($request->id);

        $proyecto->delete();
        return;
    }
}
