<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\hash;

class signInController extends Controller
{
    public function loginView(Request $request)
    {
        // if ($request -> get_headers() ->read('SESSION_ID')) return redirect()->route('dashboard'); 
        // else return view("signIn");
        return view("signIn");
    }

    public function login(Request $request){

        
        $usuario = new usuario;

        $credentials = [
            "correo" => $request ->correo,
            "contraseña" => $request -> contraseña,
        ];

        $user = usuario :: where ('correo', $credentials['correo'])->first();

        
        if ($user && Hash::check($credentials['contraseña'],$user->contraseña)){
            $request -> session()->regenerate();
            return redirect()->intended(route('dashboard')); 
        }
        else return redirect(route('signIn')); 

        // if (Auth::attempt($credentials,false)){
        //     $request -> session()->regenerate();
        //     return redirect()->intended(route('dashboard')); 
        // }
    }

    public function logout(Request $request){
        Auth::logout();

        $request -> session() -> invalidate();
        $request -> session() -> regenerateToken();

        return redirect(route('signIn'));
    }
}
