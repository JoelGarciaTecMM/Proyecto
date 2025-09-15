<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class estadoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        //usuario administrador

        $usuarioAdmin1 = new Usuario();

        $usuarioAdmin1->nombre = 'Joel Adrian';
        $usuarioAdmin1->apellido = 'Garcia Soto';
        $usuarioAdmin1->correo = 'za19011239@zapopan.tecmm.edu.mx';
        $usuarioAdmin1->contraseña = Hash::make("admin1");
        $usuarioAdmin1->tipoUsuario = '1';

        $usuarioAdmin1->save();

        $usuarioAdmin2 = new Usuario();

        $usuarioAdmin2->nombre = 'Admin';
        $usuarioAdmin2->apellido = 'admin';
        $usuarioAdmin2->correo = 'luis.gaytan@fundacionjuanpablo.org';
        $usuarioAdmin2->contraseña = Hash::make("gagl980219");
        $usuarioAdmin2->tipoUsuario = '1';

        $usuarioAdmin2->save();



        
    }
}
