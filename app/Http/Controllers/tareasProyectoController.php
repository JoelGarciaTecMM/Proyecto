<?php

namespace App\Http\Controllers;

use App\Models\tareasProyecto;
use Illuminate\Http\Request;

class tareasProyectoController extends Controller
{
    public function index()
    {
        return view("tareasProyecto");
    }

    public function show(Request $request)
    {
        $tareaProyecto = tareasProyecto::where('idProyecto','=', $request->id)->get();

        return $tareaProyecto;
    }


    public function create(Request $request){
        $tareaProyecto = new tareasProyecto();

        $tareaProyecto->nombre = $request->nombre;
        $tareaProyecto->descripcion = $request->descripcion;
        $tareaProyecto->estado = '1';
        $tareaProyecto->idUsuario = $request->usuario;
        $tareaProyecto->idProyecto = $request->idProyecto;
        $tareaProyecto->caducidad = $request->caducidad;

        $tareaProyecto->save(); 
        return $tareaProyecto;
    }

    public function update(Request $request){
        $tareaProyecto = tareasProyecto::find($request->id);

        $tareaProyecto->nombre = $request->nombre;
        $tareaProyecto->descripcion = $request->descripcion;
        $tareaProyecto->estado = '1';
        $tareaProyecto->idUsuario = $request->usuario;
        $tareaProyecto->caducidad = $request->caducidad;
        $tareaProyecto->prioridad = $request->prioridad;

        $tareaProyecto->save();
        return $tareaProyecto;
    }

    public function delete(Request $request){
        $tareaProyecto = tareasProyecto::find($request->id);

        $tareaProyecto->delete();
        return;
    }
    
}
