@extends('layout.plantilla')

@section('titulo', 'Usuarios')

@section('content')
    <div class="container-fluid py-3">
        <div class="row me-1">
            <div class = "card">
                <div class="card-header p-3">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow text-center border-radius-lg float-start">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h4 class="">Usuarios</h4>
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
                                    <a type = "button" class = "btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarUsuario"><i class="material-icons opacity-10">add</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class = "table table-flush dataTable-table" id = "dateTable-usuarios">
                                <thead>
                                    <td>id</td>
                                    <td>nombre</td>
                                    <td>correo</td>
                                    <td>tipo</td>
                                    <td>acciones</td>
                                </thead>
                                <tbody id = "tbodyTableUsuarios">
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

@include('modales.usuario_agregar');
@include('modales.usuario_editar');

@section('js')

    <script>
        const ruta_get_usuarios = '{{route('api.usuarios.show')}}';
        const ruta_post_usuarios = '{{route('api.usuarios.create')}}';
        const ruta_put_usuarios = '{{route('api.usuarios.update')}}';
        const ruta_delete_usuarios = '{{route('api.usuarios.delete')}}';
        const ruta_rol_todos = '{{route('api.rolUsuario.todos')}}';
        //const ruta_estado_todos = '{{route('api.usuarios.delete')}}';
    </script>
    <script src="../resources/js/apiFunctions/usuarios.js"></script>
@endsection