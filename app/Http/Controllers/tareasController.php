<?php

namespace App\Http\Controllers;

use App\Models\beneficiario;

use App\Models\estadoTarea;
use App\Models\prioridad;
use App\Models\proyecto;
use App\Models\tareasProyecto;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class tareasController extends Controller
{
    public function index()
    {
        return view("tareas");
    }

    public function getTask(Request $request){

        $tareas = tareasProyecto::where('idUsuario','=',$request->idUsuario)->get();

        if ($tareas->count() > 0){
            for ($i= 0; $i< $tareas->count(); $i++){
                $proyecto = proyecto::where ('id','=',$tareas[$i]->idProyecto)->get();
                $cliente = beneficiario::where ('id','=',$proyecto[0]->idCliente)->get();
                $tareas[$i]->nombreCliente = $cliente[0]->nombre;
                $tareas[$i]->idCliente = $cliente[0]->id;

                $estado = estadoTarea::where('id','=',$tareas[$i]->estado)->get();
                $prioridad = prioridad::where ('id','=',$tareas[$i]->prioridad)->get();
                $tareas[$i]->nombreEstado = $estado[0]->nombre;
                $tareas[$i]->nombrePrioridad = $prioridad[0]->nombre;
            }
        }


        return $tareas;
    }

    public function completeTask(Request $request){
        $tareas = tareasProyecto::find($request->id);
        $tareas->estado = '4';
        $validar = $tareas->save();

        return $validar;
    }


}
