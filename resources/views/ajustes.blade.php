@extends('layout.plantilla')

@section('titulo', 'Usuarios')

@section('content')
    <div class="container-fluid py-3">
        <div class="row me-1">
            <div class = "card">
                <div class="card-header p-3">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow text-center border-radius-lg float-start">
                        <i class="material-icons opacity-10">settings</i>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h4 class="">Ajustes</h4>
                        </div>
                    </div>
                </div>
                <div class="card mt-5" id="basic-info">
                    <form id = "formAjustes">
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Nombres</label>
                                        <input type="text" class="form-control" id= "ajustesNombre" name = "nombre" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Apellidos</label>
                                        <input type="text" class="form-control" id = "ajustesApellido" name = "apellido" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Correo</label>
                                        <input type="email" class="form-control" id = "ajustesCorreo" name = "correo" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" id = "ajustesContraseña" name = "contraseña">
                                    </div>
                                </div>
                            </div>
                            <button type submit class="btn bg-gradient-primary btn-sm float-end mt-6 mb-0">Actualizar informacion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


        
@endsection

@include('modales.usuario_agregar');
@include('modales.usuario_editar');

@section('js')

    <script>
        const ruta_get_usuario = '{{route('api.usuarios.showOne')}}';
        const ruta_post_usuarios = '{{route('api.usuarios.update')}}';
        const idUsuario = '{{Session::get('id')}}';
        //const ruta_estado_todos = '{{route('api.usuarios.delete')}}';
    </script>
    <script src="../resources/js/apiFunctions/ajustes.js"></script>
@endsection