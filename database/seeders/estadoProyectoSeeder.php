<?php

namespace Database\Seeders;

use App\Models\estadoProyecto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estadoProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        //activo

        $estadoActivo = new estadoProyecto();

        $estadoActivo->nombre = 'Activo';
        $estadoActivo->descripcion = 'Estado por defecto de los proyectos';

        $estadoActivo->save();

        //inactivo

        $estadoInactivo = new estadoProyecto();

        $estadoInactivo->nombre = 'Inactivo';
        $estadoInactivo->descripcion = 'Estado de proyecto pausado';

        $estadoInactivo->save();

        //completado

        $estadoCompletado = new estadoProyecto();

        $estadoCompletado->nombre = 'Completado';
        $estadoCompletado->descripcion = 'Estado de proyecto completado';

        $estadoCompletado->save();



    }
}
