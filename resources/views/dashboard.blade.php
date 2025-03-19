@extends('layout.plantilla')

@section('titulo', 'dashboard')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
        <div class="col-lg-8 col-12">
            <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mb-2 mb-md-0">
                <div class="col-12 mt-3">
                    <div class="card mt-4">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">laptop_windows</i>
                            </div>
                            <div class="text-end">
                                <p class="text-sm mb-0 text-capitalize">Proyectos</p>
                                <h5 class="mb-0">
                                    115
                                </h5>
                            </div>
                        </div>
                        <div class="card-body px-3 pt-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <span class="badge badge-dot d-block text-start pb-0 mt-3">
                                    <i class="bg-gradient-info"></i>
                                    <span class="text-muted">Completado</span>
                                    </span>
                                    <span class="badge badge-dot d-block text-start">
                                    <i class="bg-gradient-secondary"></i>
                                    <span class="text-muted">Pendiente</span>
                                    </span>
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <div class="chart ms-auto">
                                    <canvas id="chart-bar-proyecto" class="chart-canvas" height="150"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mb-lg-3">
                <div class="col-12 mt-3">
                    <div class="card mt-4">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">task</i>
                            </div>
                            <div class="text-end">
                                <p class="text-sm mb-0 text-capitalize">Tareas</p>
                                <h5 class="mb-0">
                                    115
                                </h5>
                            </div>
                        </div>
                        <div class="card-body px-3 pt-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <span class="badge badge-dot d-block text-start pb-0 mt-3">
                                    <i class="bg-gradient-info"></i>
                                    <span class="text-muted">Completado</span>
                                    </span>
                                    <span class="badge badge-dot d-block text-start">
                                    <i class="bg-gradient-secondary"></i>
                                    <span class="text-muted">Pendiente</span>
                                    </span>
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <div class="chart ms-auto">
                                    <canvas id="chart-bar-tarea" class="chart-canvas" height="150"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row mt-4">
            
            {{-- <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mb-2 mb-md-0">
                <div class="col-12 mt-3">
                    <div class="card mt-4">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">local_shipping</i>
                            </div>
                            <div class="text-end">
                                <p class="text-sm mb-0 text-capitalize">Projects</p>
                                <h5 class="mb-0">
                                    115
                                </h5>
                            </div>
                        </div>
                        <div class="card-body px-3 pt-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <span class="badge badge-dot d-block text-start pb-0 mt-3">
                                    <i class="bg-gradient-info"></i>
                                    <span class="text-muted">Done</span>
                                    </span>
                                    <span class="badge badge-dot d-block text-start">
                                    <i class="bg-gradient-secondary"></i>
                                    <span class="text-muted">In progress</span>
                                    </span>
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <div class="chart ms-auto">
                                    <canvas id="chart-bar" class="chart-canvas" height="150"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0">
                <div class="col-12 mt-3">
                    <div class="card mt-4">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">local_shipping</i>
                            </div>
                            <div class="text-end">
                                <p class="text-sm mb-0 text-capitalize">Projects</p>
                                <h5 class="mb-0">
                                    115
                                </h5>
                            </div>
                        </div>
                        <div class="card-body px-3 pt-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <span class="badge badge-dot d-block text-start pb-0 mt-3">
                                    <i class="bg-gradient-info"></i>
                                    <span class="text-muted">Done</span>
                                    </span>
                                    <span class="badge badge-dot d-block text-start">
                                    <i class="bg-gradient-secondary"></i>
                                    <span class="text-muted">In progress</span>
                                    </span>
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <div class="chart ms-auto">
                                    <canvas id="chart-bar" class="chart-canvas" height="150"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
        
            
        </div>

        <div class="col-xl-15">
            <div class="card card-calendar">
                <div class="card-body p-3">
                    <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
                </div>
            </div>
        </div>

        
@endsection