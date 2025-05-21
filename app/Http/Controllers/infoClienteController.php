<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\documentoCliente;
use App\Models\documentoTarea;
use App\Models\proyecto;
use App\Models\tareasProyecto;
use Illuminate\Http\Request;

class infoClienteController extends Controller
{
    public function infoGeneral(Request $request){
        $info = cliente::where ('id', '=', $request->id)->get();
        return $info;
    }

    public function documentos(Request $request){
        $arr = [];
        
        $documentosCliente = documentoCliente::where ('idCliente','=',$request->idCliente)->get();
        
        for ($i= 0; $i< $documentosCliente->count(); $i++){
            array_push($arr,$documentosCliente[$i]);
        }

        $proyectosCliente = proyecto::where('idCliente','=',$request->idCliente)->get();

        for ($i= 0; $i<$proyectosCliente->count(); $i++){
            
            $tareasProyecto = tareasProyecto::where ('idProyecto','=',$proyectosCliente[$i]->id)->get();

            for ($x=0; $x< $tareasProyecto->count(); $x++){
                $tareasDocumento = documentoTarea::where('idTarea','=',$tareasProyecto[$x]->id)->get();

                for ($y=0; $y<$tareasDocumento->count(); $y++){
                    array_push($arr,$tareasDocumento[$y]);
                }
            }

        }

        return $arr;
    }

    public function proyectos(Request $request){
        $proyectos = proyecto::where ('idCliente','=',$request->idCliente)->orderby('id','desc')->get();

        return $proyectos;
    }

    public function proyectosActivos(Request $request){
        $proyectos = proyecto::where ('idCliente','=',$request->idCliente)->where('estado','=','1')->orderby('id','desc')->get();

        return $proyectos;
    }

    public function addDocument (Request $request){
        $file = $request->file('documento');
        $fileName = $file->getClientOriginalName();
        $placefile = "/storage/app/public/".$fileName;
        $file->storeAs('',$file->getClientOriginalName(),'public');

        
        $filedb = new documentoCliente();

        $filedb->nombre = $fileName;
        $filedb->ruta = $placefile;
        $filedb->idCliente = $request->idCliente;

        $verificar = $filedb->save();

        return $verificar;
    }

    public function deleteDocument (Request $request){

    }
}
