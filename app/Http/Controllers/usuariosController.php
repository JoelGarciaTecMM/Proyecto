<?php

namespace App\Http\Controllers;

use App\Models\rolUsuario;
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

        for($i=0; $i<$usuario->count(); $i++){
            $rol = rolUsuario::where ('id','=',$usuario[$i]->tipoUsuario)->get();
            $usuario[$i]->nombreRol = $rol[0]->nombre;
        }

        //return $proyectos;
        return $usuario;
    }

        public function showOne(Request $request)
    {
        $usuario = Usuario::where('id','=',$request->idUsuario)->get();

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

        $verificacion = $usuario->save(); 
        return $verificacion;
    }

    public function update(Request $request){
        $usuario = Usuario::find($request->idUsuario);
        $usuario-> nombre = $request -> nombre;
        $usuario-> apellido = $request -> apellido;
        $usuario-> correo = $request -> correo;
        if ($request-> tipoUsuario != null)$usuario-> tipoUsuario = $request -> tipoUsuario;
        if ($request-> contraseña != null) $usuario-> contraseña = Hash::make($request->contraseña);

        $verificacion = $usuario->save();
        return $verificacion;
    }

    public function delete(Request $request){
        $usuario = Usuario::find($request->id);

        $verificacion = $usuario->delete();
        return $verificacion;
    }
}
