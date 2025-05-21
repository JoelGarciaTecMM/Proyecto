<?php

namespace App\Models;

//use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'id',
        'nombre',
        'tipoUsuario',
        'contraseña',
    ];

    protected $hidden = [
        'contraseña'
    ];

    public function getAuthPassword()
    {
        return $this->user_pass;
    }

    public $timestamps = false;
}
