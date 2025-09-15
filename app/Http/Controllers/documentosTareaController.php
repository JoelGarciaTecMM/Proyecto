<?php

namespace App\Http\Controllers;

use App\Models\documentoTarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\StorageAttributes;

class documentosTareaController extends Controller
{
    //

    public function getAll (Request $request){
        $documentos = documentoTarea::where ('idTarea','=',$request->idTarea)->get();
        
        return $documentos;

    }

    public function create (Request $request){

        $file = $request->file('documento');
        $fileName = $file->getClientOriginalName();
        $placefile = "/storage/app/public/".$fileName;
        $file->storeAs('',$file->getClientOriginalName(),'public');

        
        $filedb = new documentoTarea();

        $filedb->nombre = $fileName;
        $filedb->ruta = $placefile;
        $filedb->idTarea = $request->idTarea;

        $verificar = $filedb->save();

        return $verificar;
    }

    public function delete (Request $request){

        $documento = documentoTarea::find($request->id);

        if ($documento->count() >= 1){

            //$path = public_path($documento[0]->nombre);

            //$delete = Storage::delete($path);
            
            //echo $delete;
            $verificacion = $documento->delete();
        }


        return $verificacion;
    }
}
