@extends('layout.plantilla')

@section('titulo', 'Usuarios')

@section('content')

    <div class="container-fluid py-3">
        <div class="row me-1">
            <div class = "card">
                <div class="card-header p-3">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow text-center border-radius-lg float-start">
                        <i class="material-icons opacity-10">task</i>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h4 class="">Tareas</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-15">
                    <div class="card card-calendar">
                        <div class="card-body p-3">
                            <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="card-body me-5 ms-5 mt-5">
                    <div class="row">

                        <div class="table-responsive">
                            <table class = "table table-flush dataTable-table" id = "dateTable-tareasUsuario">
                                <thead>
                                    <td>Id</td>
                                    <td>Nombre</td>
                                    <td>Descripcion</td>
                                    <td>Estado</td>
                                    <td>Caducidad</td>
                                    <td>Prioridad</td>
                                    <td>Cliente</td>
                                    <td>Acciones</td>
                                </thead>
                                <tbody id = "tbodyTableTareasUsuario">
                                    {{-- @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{$usuario->id}}</td>
                                        <td>{{$usuario->nombre}}</td>
                                        <td>{{$usuario->apellido}}</td>
                                        <td>{{$usuario->correo}}</td>
                                        <td>{{$usuario->tipoUsuario}}</td>
                                        <td class = "text-sm">
                                            <a type = "button" data-bs-toggle="modal" data-bs-target="#actualizarProyecto"><i class="material-icons opacity-10">edit</i></a>
                                            <a type = "button" class = ""><i class="material-icons opacity-10">delete</i></a>
                                        </td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
@endsection

@include('modales.tarea_documento');

@section('js')

    <script>
        const ruta_get_tareas = '{{route('api.tareasUsuario.get')}}';
        const ruta_completar_tarea = '{{route('api.tareasUsuario.complete')}}';
        const ruta_rol_todos = '{{route('api.rolUsuario.todos')}}';
        const documentos_tarea = '{{route('api.documentoTarea')}}';
        const documentos_tarea_create = '{{route('api.documentoTarea.create')}}';
        const documentos_tarea_delete = '{{route('api.documentoTarea.delete')}}';

        //const ruta_estado_todos = '{{route('api.usuarios.delete')}}';
        const usuarioId = '{{Session::get('id')}}';

    </script>
    <script src="../resources/js/apiFunctions/tareas.js"></script>
@endsection