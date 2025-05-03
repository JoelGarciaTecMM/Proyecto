<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class clientesController extends Controller
{
    public function index()
    {
        $clientes = cliente::all();

        return view("clientes",compact('clientes'));
    }

    public function show()
    {
        $cliente = Cliente::all();

        //return $proyectos;
        return $cliente;
    }


    public function create(Request $request){
        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->curp = $request->curp;

        $cliente->save(); 
        return $cliente;
    }

    public function update(Request $request){
        $cliente = Cliente::find($request->id);
        $cliente-> nombre = $request -> nombre;
        $cliente-> apellido = $request -> apellido;
        $cliente-> correo = $request -> correo;
        $cliente-> telefono = $request -> telefono;
        $cliente-> curp = $request -> curp;

        $cliente->save();
        return $cliente;
    }

    public function delete(Request $request){
        $cliente = Cliente::find($request->id);

        $cliente->delete();
        return;
    }

    public function info_clientes(){

        
        return view ("infoClientes");
    }

}
