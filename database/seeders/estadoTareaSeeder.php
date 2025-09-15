<?php

namespace Database\Seeders;

use App\Models\estadoTarea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estadoTareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        //estado Creado
        $estadoCreado = new estadoTarea();

        $estadoCreado->nombre = 'creado';
        $estadoCreado->descripcion = 'Estado por defecto de las tareas';

        $estadoCreado->save();

        //Estado asignado

        $estadoAsignado = new estadoTarea();

        $estadoAsignado->nombre = 'Asignado';
        $estadoAsignado->descripcion = 'Estado cuando se asigna un empleado';

        $estadoAsignado->save();

        //Estado pendiente

        $estadoPendiente = new estadoTarea();

        $estadoPendiente->nombre = 'Pendiente';
        $estadoPendiente->descripcion = 'Estado para tareas pausadas';

        $estadoPendiente->save();

        //Estado Completado

        $estadoCompletado = new estadoTarea();

        $estadoCompletado->nombre = 'Completado';
        $estadoCompletado->descripcion = 'Estado completado de la tarea';

        $estadoCompletado->save();
        

    }
}
