<?php

namespace Database\Seeders;

use App\Models\rolUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rolUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //rol Administrador

        $rol1 = new rolUsuario();

        $rol1->nombre = 'Administrador';
        $rol1->descripcion = 'Rol que tiene accesos a todo';
        $rol1->save();

        //rol Empleado

        $rol2 = new rolUsuario();
        $rol2->nombre = 'Empleado';
        $rol2->descripcion = 'Rol que tiene acceso limitado a tareas y proyectos';
        $rol2->save();
    }
}
