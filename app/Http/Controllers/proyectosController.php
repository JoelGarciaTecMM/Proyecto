<?php

namespace App\Http\Controllers;

use App\Models\beneficiario;

use App\Models\estadoProyecto;
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
        $proyectos = proyecto::get();


        for ($i=0; $i < $proyectos->count(); $i++ ){

            $estado = estadoProyecto::where('id', '=', $proyectos[$i]->estado)->get();
            $cliente = beneficiario::where ('id','=',$proyectos[$i]->idCliente)->get();
            $proyectos[$i]->nombreEstado = $estado[0]->nombre;
            $proyectos[$i]->nombreCliente = $cliente[0]->nombre;
        }

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

        $verificacion = $proyectos->save(); 
        return $verificacion;
    }

    public function update(Request $request){
        $proyecto = proyecto::find($request->idProyecto);
        $proyecto-> nombre = $request -> nombre;
        $proyecto-> idCliente = $request -> cliente;
        $proyecto-> fechaInicio = $request -> fechaInicio;
        $proyecto-> fechaFin = $request -> fechaFin;
        $proyecto-> descripcion = $request -> descripcion;
        $proyecto-> estado = $request ->estado;

        $verificacion = $proyecto->save();

        return $verificacion;
    }

    public function delete(Request $request){
        $proyecto = proyecto::find($request->id);

        $verificacion = $proyecto->delete();
        return $verificacion;
    }
}
