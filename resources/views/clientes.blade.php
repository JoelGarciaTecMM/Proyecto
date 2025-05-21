@extends('layout.plantilla')

@section('titulo', 'Clientes')

@section('content')
    <div class="container-fluid py-3">
        <div class="row me-1">
            <div class = "card">
                <div class="card-header p-3">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow text-center border-radius-lg float-start">
                        <i class="material-icons opacity-10">group</i>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h4 class="">Clientes</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body me-5 ms-5">
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
                                    <a type = "button" class = "btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarCliente"><i class="material-icons opacity-10">add</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class = "table table-flush dataTable-table" id = "dataTable-clientes">
                                <thead>
                                    <td>Id</td>
                                    <td>Nombre</td>
                                    <td>Apellido</td>
                                    <td>Correo</td>
                                    <th>Telefono</th>
                                    <td>Curp</td>
                                    <td>Acciones</td>
                                </thead>
                                <tbody id = "tbodyTableClientes">
                                    {{-- @foreach ($clientes as $clientes)
                                    <tr>
                                        <td>{{$clientes->id}}</td>
                                        <td>{{$clientes->nombre}}</td>
                                        <td>{{$clientes->apellido}}</td>
                                        <td>{{$clientes->correo}}</td>
                                        <td>{{$clientes->telefono}}</td>
                                        <td class = "text-sm">
                                            <a type = "button" data-bs-toggle="modal" data-bs-target="#actualizarProyecto"><i class="material-icons opacity-10">edit</i></a>
                                            <a type = "button" class = ""><i class="material-icons opacity-10">person</i></a>
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

@include('modales.cliente_agregar');
@include('modales.cliente_editar');


@section('js')

    <script>
        const ruta_get_clientes = '{{route('api.clientes.show')}}';
        const ruta_post_clientes = '{{route('api.clientes.create')}}';
        const ruta_put_clientes = '{{route('api.clientes.update')}}';
        const ruta_delete_clientes = '{{route('api.clientes.delete')}}';
    </script>
    <script src="../resources/js/apiFunctions/clientes.js"></script>
@endsection