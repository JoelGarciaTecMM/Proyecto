<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usuariosController extends Controller
{
    public function index()
    {
        $usuarios = usuario::all();
        return view("usuarios",compact('usuarios'));
    }

    
    public function show()
    {
        $usuario = Usuario::all();

        //return $proyectos;
        return $usuario;
    }


    public function create(Request $request){
        $usuario = new Usuario();

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo = $request->correo;
        $usuario->contraseña = Hash::make($request->contraseña);
        $usuario->tipoUsuario = $request->tipoUsuario;

        $usuario->save(); 
        return ;
    }

    public function update(Request $request){
        $usuario = Usuario::find($request->idUsuario);
        $usuario-> nombre = $request -> nombre;
        $usuario-> apellido = $request -> apellido;
        $usuario-> correo = $request -> correo;
        $usuario-> tipoUsuario = $request -> tipoUsuario;
        if ($request-> contraseña != null) $usuario-> contraseña = Hash::make($request->contraseña);

        $usuario->save();
        return $usuario;
    }

    public function delete(Request $request){
        $usuario = Usuario::find($request->id);

        $usuario->delete();
        return;
    }
}
