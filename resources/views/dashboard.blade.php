@extends('layout.plantilla')

@section('titulo', 'dashboard')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
        <div class="">
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
                                <!--
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
                                -->
                                <div class="col-lg-7 mx-auto my-auto
                                ">
                                    <div class="chart ms-auto ">
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
                                <!--
                                <div class="col-lg-5">
                                    <span class="badge badge-dot d-block text-start pb-0 mt-3">
                                    <i class="bg-gradient-info"></i>
                                    <span class="text-muted">Completado</span>
                                    </span>
                                    <span class="badge badge-dot d-block text-start">
                                    <i class="bg-gradient-secondary"></i>
                                    <span class="text-muted">Pendiente</span>
                                    </span>
                                </div> -->

                                <div class="col-lg-7 mx-auto my-auto">
                                    <div class="chart ms-auto">
                                    <canvas id="chart-bar-tareas" class="chart-canvas" height="150"></canvas>
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

@section ('js')

    <script>

        //graficas 
        const char1 = document.getElementById('chart-bar-proyecto');

        new Chart(char1, {
        type: 'pie',
        data: {
            labels: ['Completado', 'Pendiente'],
            datasets: [{
            label: '# of Votes',
            backgroundColor:[ '#17c1e8','#e91e63' ],
            data: [12, 19],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const chartTareas = document.getElementById('chart-bar-tareas');

        new Chart(chartTareas, {
        type: 'pie',
        data: {
            labels: ['Completado', 'Pendiente'],
            datasets: [{
            label: '# of Votes',
            backgroundColor:[ '#17c1e8','#e91e63' ],
            data: [2, 3],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: false
            }
            }
        }
        });

        //calendario

        var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
        contentHeight: 'auto',
        initialView: "dayGridMonth",
        headerToolbar: {
            start: 'title', // will normally be on the left. if RTL, will be on the right
            center: '',
            end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
        },
        selectable: true,
        editable: true,
        initialDate: '2020-12-01',
        events: [{
            title: 'Call with Dave',
            start: '2020-11-18',
            end: '2020-11-18',
            className: 'bg-gradient-danger'
            },

            {
            title: 'Lunch meeting',
            start: '2020-11-21',
            end: '2020-11-22',
            className: 'bg-gradient-warning'
            },

            {
            title: 'All day conference',
            start: '2020-11-29',
            end: '2020-11-29',
            className: 'bg-gradient-success'
            },

            {
            title: 'Meeting with Mary',
            start: '2020-12-01',
            end: '2020-12-01',
            className: 'bg-gradient-info'
            },

            {
            title: 'Winter Hackaton',
            start: '2020-12-03',
            end: '2020-12-03',
            className: 'bg-gradient-danger'
            },

            {
            title: 'Digital event',
            start: '2020-12-07',
            end: '2020-12-09',
            className: 'bg-gradient-warning'
            },

            {
            title: 'Marketing event',
            start: '2020-12-10',
            end: '2020-12-10',
            className: 'bg-gradient-primary'
            },

            {
            title: 'Dinner with Family',
            start: '2020-12-19',
            end: '2020-12-19',
            className: 'bg-gradient-danger'
            },

            {
            title: 'Black Friday',
            start: '2020-12-23',
            end: '2020-12-23',
            className: 'bg-gradient-info'
            },

            {
            title: 'Cyber Week',
            start: '2020-12-02',
            end: '2020-12-02',
            className: 'bg-gradient-warning'
            },

        ],
        views: {
            month: {
            titleFormat: {
                month: "long",
                year: "numeric"
            }
            },
            agendaWeek: {
            titleFormat: {
                month: "long",
                year: "numeric",
                day: "numeric"
            }
            },
            agendaDay: {
            titleFormat: {
                month: "short",
                year: "numeric",
                day: "numeric"
            }
            }
        },
        });

        calendar.render();

    </script>

@endsection