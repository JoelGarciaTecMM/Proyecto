@extends('layout.plantilla')

@section('titulo', 'Tareas Proyecto')

@section('head')

<link href="../resources/css/main.css" rel="stylesheet" />
<link href="../resources/css/animations.css" rel="stylesheet" />

@endsection

@section('content')

<style>
    .radius-section{
        border-radius: 0px 30px 30px 0px;
        overflow-y: scroll;
    }
</style>

<div class="container-fluid py-3">
<div class="row me-1" >
    <div class = "card" >
        <div class="" >
            <div class="row" >

                <!-- Animated Background -->
                {{-- <div class="lm-animated-bg" style="background-image: url(img/AB.jpg);"></div> --}}
                <!-- /Animated Background -->



                <div class="page" >
                    <div class="page-content">

                        <header id="site_header" class="header">
                            <div class="header-content">
                                <div class="header-photo">
                                    <img src="..\resources\documents\images\fotoDePerfil.jpg" alt="Imagen de perfil"><!----imagen de inicio---->
                                </div>
                                <div class="header-titles">
                                    <h2 id="nombreCliente"></h2><!---Variable nombre--->
                                    <!---<h4>Asesor comercial</h4> Variable puesto--->
                                </div>
                            </div>

                            <ul class="main-menu">
                                <li class="active">
                                    <a type = "button" class="" onclick = "changePage('resumen')">
                                        <i class="material-icons opacity-10">home</i>
                                        <span class="link-text">Resumen</span>
                                    </a>
                                </li>
                                <li>
                                    <a type = "button"  class="" onclick = "changePage('proyectos')">
                                        <i class="material-icons opacity-10">work</i>
                                        <span class="link-text">Proyectos</span>
                                    </a>
                                </li>
                                <li>
                                    <a type = "button"  class="" onclick = "changePage('documentos')">
                                        <i class="material-icons opacity-10">description</i>
                                        <span class="link-text">Documentos</span>
                                    </a>
                                </li>
                            </ul>


                        </header>

                        <!-- Mobile Navigation -->
                        <div class="menu-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- End Mobile Navigation -->

                        <!-- Arrows Nav -->
                        {{-- <div class="lmpixels-arrows-nav">
                            <div class="lmpixels-arrow-right"><i class="material-icons opacity-10">chevron_right</i></div>
                            <div class="lmpixels-arrow-left"><i class="material-icons opacity-10">chevron_left</i></div>
                        </div> --}}
                        <!-- End Arrows Nav -->

                        <div class="content-area " >
                            <div class="" >
                                <!-- Home Subpage -->
                                <section class="" id = "pagResume" style = "">
                                    <div class="section-content radius-section">

                                        <div class="row h-50">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="title-block mb-4">
                                                    <h3>Resumen</h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="title-block">
                                                    <h4>Correo:</h4>
                                                    <span id="correoCliente"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="title-block">
                                                    <h4>Telefono:</h4>
                                                    <span id="telefonoCliente"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="title-block">
                                                    <h4>Curp:</h4>
                                                    <span id="curpCliente"></span>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-2 col-lg-12 mb-4">
                                                <div class="col-xl-12 text">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-2 mt-xl-0 mt-4 ">
                                                            <div class="card text-center">
                                                                <div class="card-header p-3 pb-0">
                                                                    <h6 class="mb-0">proyectos Activos</h6>
                                                                </div>
                                                                <div id = "proyectosClienteResumen">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-12 col-lg-12 mb-4">
                                                <div class="col-xl-12">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-2 mt-xl-0 mt-4">
                                                            <div class="card text-center">
                                                                <div class="card-header p-3 pb-0">
                                                                    <h6 class="mb-0">Ultimos documentos</h6>
                                                                </div>
                                                                <div id = "documentosClienteResumen">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                                
                                <section  class="" id = "pagProyectos" style = "display: none;">
                                    <div class="section-content radius-section">
                                        <div class="row h-50">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="title-block mb-4">
                                                    <h3>Proyectos</h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-2 col-lg-12 mb-4">
                                                <div class="col-xl-12 text">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-2 mt-xl-0 mt-4 ">
                                                            <div class="card text-center">
                                                                <div class="card-header p-3 pb-0">
                                                                    <h6 class="mb-0"></h6>
                                                                </div>
                                                                <div id = "proyectosClienteContenido">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section  class="" id = "pagDocumentos" style = "display: none;">
                                    <div class="section-content radius-section">
                                        <div class="row h-50">
                                            <div>
                                                <form id = "uploadUserFile">
                                                    <input class = "form-control" type="file" name="documento" id="documento">
                                                    <div class = "mt-2 d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <button type = "submit" class = "btn btn-success " href="">Agregar archivo</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="title-block mb-4">
                                                    <h3>Documentos</h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-2 col-lg-12 mb-4">
                                                <div class="col-xl-12 text">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-2 mt-xl-0 mt-4 ">
                                                            <div class="card text-center">
                                                                <div class="card-header p-3 pb-0">
                                                                    <h6 class="mb-0"></h6>
                                                                </div>
                                                                <div id = "documentosClienteContenido">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- End of Contact Subpage -->
                            </div>
                        </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @include('modales.tareas_proyecto_agregar');
@include('modales.tareas_proyecto_editar'); --}}


@section('js')

    <!--<script src="../resources/js/main.js"></script> -->

    <script>
        const ruta_get_infoGeneral = '{{route('api.infoCliente.general')}}';
        const ruta_get_infoProyectos = '{{route('api.infoCliente.proyectos')}}';
        const ruta_get_infoProyectosActivos = '{{route('api.infoCliente.proyectosActivos')}}';
        const ruta_get_infoDocumentos = '{{route('api.infoCliente.archivos')}}';
        const ruta_upload_document = '{{route('api.infoCliente.uploadFile')}}';
        const ruta_delete_document = '{{route('api.infoCliente.deleteFile')}}';
        // const ruta_delete_tareasProyecto = '{{route('api.tareasProyecto.delete')}}';
        const id_cliente = '{{request()->id}}';
        console.log (id_cliente);
    </script>
    <script src="../resources/js/apiFunctions/infoCliente.js"></script> 
@endsection