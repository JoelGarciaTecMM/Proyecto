<?php

namespace App\Http\Controllers;

use App\Models\estadoTarea;
use App\Models\prioridad;
use App\Models\tareasProyecto;
use App\Models\Usuario;
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

        for($i=0; $i < $tareaProyecto->count(); $i++){
            
            $estado = estadoTarea::where ('id','=',$tareaProyecto[$i]->estado)->get();
            $usuario = Usuario::where ('id','=',$tareaProyecto[$i]->idUsuario)->get();
            $prioridad = prioridad::where ('id','=',$tareaProyecto[$i]->prioridad)->get();
            $tareaProyecto[$i]->nombreEstado = $estado[0]->nombre;
            $tareaProyecto[$i]->nombreUsuario = $usuario[0]->nombre;
            $tareaProyecto[$i]->nombrePrioridad = $prioridad[0]->nombre;


        }

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
        $tareaProyecto->prioridad = $request->prioridad;

        $verificacion = $tareaProyecto->save(); 
        return $verificacion;
    }

    public function update(Request $request){
        $tareaProyecto = tareasProyecto::find($request->id);

        $tareaProyecto->nombre = $request->nombre;
        $tareaProyecto->descripcion = $request->descripcion;
        $tareaProyecto->estado = $request->estado;
        $tareaProyecto->idUsuario = $request->usuario;
        $tareaProyecto->caducidad = $request->caducidad;
        $tareaProyecto->prioridad = $request->prioridad;

        $verificacion = $tareaProyecto->save();
        return $verificacion;
    }

    public function delete(Request $request){
        $tareaProyecto = tareasProyecto::find($request->id);

        $verificacion = $tareaProyecto->delete();
        return $verificacion;
    }
    
}
