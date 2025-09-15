<?php

namespace App\Http\Controllers;

use App\Models\beneficiario;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class beneficiarioController extends Controller
{
    public function index()
    {
        $clientes = beneficiario::all();

        return view("clientes",compact('clientes'));
    }

    public function show()
    {
        $cliente = beneficiario::all();

        //return $proyectos;
        return $cliente;
    }


    public function create(Request $request){
        $cliente = new Beneficiario();

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->curp = $request->curp;

        $verificacion = $cliente->save(); 
        return $verificacion;
    }

    public function update(Request $request){
        $cliente = beneficiario::find($request->id);
        $cliente-> nombre = $request -> nombre;
        $cliente-> apellido = $request -> apellido;
        $cliente-> correo = $request -> correo;
        $cliente-> telefono = $request -> telefono;
        $cliente-> curp = $request -> curp;

        $verificacion = $cliente->save();
        return $verificacion;
    }

    public function delete(Request $request){
        $cliente = beneficiario::find($request->id);

        $verificacion = $cliente->delete();
        return $verificacion;
    }

    public function info_clientes(){

        
        return view ("infoClientes");
    }

}
