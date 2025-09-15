@extends('layout.plantilla')

@section('titulo', 'Tareas Proyecto')

@section('content')

    <div class="container-fluid py-3">
        <div class="row me-1">
            <div class = "card">
                <div class="card-header p-3">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-lg float-start">
                        <i class="material-icons opacity-10">fact_check</i>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h4 class="">tareas Proyecto</h4>
                        </div>
                    </div>
                </div>
                <div class=" card-body me-5 ms-5">
                    <div class="row">
                        <div class="container text-center mb-4">
                            <div class="row">
                                <div class="col">
                                    
                                </div>
                                <div class="col">
                                    
                                </div>
                                <div class="col">
                                    
                                </div>
                                <div class="col text-end">
                                    <a type = "button" class = "btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarTarea_proyecto"><i class="material-icons opacity-10">add</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id = "dataTable-tareasProyecto" class = "table table-flush dataTable-table">
                                <thead>
                                    <td>Id</td>
                                    <td>Nombre</td>
                                    <td>Descripcion</td>
                                    <td>Estado</td>
                                    <td>Caducidad</td>
                                    <th>Empleado</th>
                                    <th>prioridad</th>
                                    <td>Acciones</td>
                                </thead>
                                <tbody id = "tbodyTareasProyecto">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@include('modales.tareas_proyecto_agregar');
@include('modales.tareas_proyecto_editar');
@include('modales.tarea_documento');


@section('js')

    <script>
        const ruta_get_tareasProyecto = '{{route('api.tareasProyecto.show')}}';
        const ruta_post_tareasProyecto = '{{route('api.tareasProyecto.create')}}';
        const ruta_put_tareasProyecto = '{{route('api.tareasProyecto.update')}}';
        const ruta_delete_tareasProyecto = '{{route('api.tareasProyecto.delete')}}';
        const id_proyecto = '{{request()->id}}';
        const prioridad_todos = '{{route('api.prioridad.todos')}}';
        const estado_tarea_todos = '{{route('api.estadoTarea.todos')}}';
        const usuarios_todos = '{{route('api.usuarios.show')}}';
        const documentos_tarea = '{{route('api.documentoTarea')}}';
        const documentos_tarea_create = '{{route('api.documentoTarea.create')}}';
        const documentos_tarea_delete = '{{route('api.documentoTarea.delete')}}';

        console.log (id_proyecto);
    </script>
    <script src="../resources/js/apiFunctions/tareas_proyecto.js"></script>
@endsection