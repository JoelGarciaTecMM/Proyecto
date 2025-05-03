@extends('layout.plantilla')

@section('titulo', 'Proyectos')

@section('content')
    <div class="container-fluid py-3">
        <div class="row me-1">
            <div class = "card">
                <div class="me-5 ms-5">
                    <div class="row">
                        <span class = "mb-2 fs-4 mt-4">Proyectos</span>
                        <div class="container text-center mb-4">
                            <div class="row">
                                <div class="col">
                                    
                                </div>
                                <div class="col">
                                    
                                </div>
                                <div class="col">
                                    
                                </div>
                                <div class="col text-end">
                                    <a type = "button" class = "btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarProyecto"><i class="material-icons opacity-10">add</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class = "table table-flush dataTable-table" id = "myTable">
                                <thead>
                                    <td>Id</td>
                                    <td>Nombre</td>
                                    <td>Cliente</td>
                                    <td>Estado</td>
                                    <td>Fecha inicio</td>
                                    <td>Fecha fin</td>
                                    <td>Descripcion</td>
                                    <td>Acciones</td>
                                </thead>
                                <tbody id = "tbodyTableProyectos">
                                    {{-- @foreach ($proyectos as $proyecto)
                                        <tr>
                                            <td>{{$proyecto->id}}</td>
                                            <td>{{$proyecto->nombre}}</td>
                                            <td>{{$proyecto->idCliente}}</td>
                                            <td>{{$proyecto->estado}}</td>
                                            <td>{{$proyecto->fechaInicio}}</td>
                                            <td>{{$proyecto->fechaFin}}</td>
                                            <td>{{$proyecto->descripcion}}</td>
                                            <td class = "text-sm">
                                                <a type = "button" data-bs-toggle="modal" data-bs-target="#actualizarProyecto"><i class="material-icons opacity-10">edit</i></a>
                                                <a type = "button" class = ""><i class="material-icons opacity-10">task</i></a>
                                                <a type = "button" class = "" onclick = "borrarProyecto(this)"><i class="material-icons opacity-10">delete</i></a>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                    <!--
                                    <tr>
                                        <td>1</td>
                                        <td>ejemplo</td>
                                        <td>ejemplo 1</td>
                                        <td>1231</td>
                                        <td>12313</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ejemplo</td>
                                        <td>ejemplo 2</td>
                                        <td>1231</td>
                                        <td>12313</td>
                                    </tr>
                                -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
@endsection
@include('modales.proyecto_agregar');
@include('modales.proyecto_actualizar');

@section('js')

    <script>
        const ruta_get_proyectos = '{{route('api.proyectos.show')}}';
        const ruta_post_proyecto = '{{route('api.proyectos.create')}}';
        const ruta_put_proyecto = '{{route('api.proyectos.update')}}';
        const ruta_delete_proyecto = '{{route('api.proyectos.delete')}}'; 
    </script>
    <script src="../resources/js/apiFunctions/proyectos.js"></script>
@endsection