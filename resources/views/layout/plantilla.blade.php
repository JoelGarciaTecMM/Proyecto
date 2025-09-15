
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_9Kj90bj0TvGpMXEv4MkTVWdjGTgmJ0zi7Q&s">
        <title> @yield('titulo')</title>

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="../resources/css/nucleo-icons.css" rel="stylesheet" />
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="../resources/css/material-dashboard.css?v=3.0.6" rel="stylesheet" />
        <link id="pagestyle" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css" rel="stylesheet" />
        <!-- Nepcha Analytics (nepcha.com) -->
        <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
        <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

        @yield('head')
    </head>
    <body class = "g-sidenav-show bg-gray-200 g-sidenav-hidden">
        
        {{-- sidebar--}}

        <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
            <div class="sidenav-header">
                <div class="navbar-brand m-0" >
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_9Kj90bj0TvGpMXEv4MkTVWdjGTgmJ0zi7Q&s" class="navbar-brand-img h-100" alt="main_logo">
                    <span class="ms-1 font-weight-bold text-white">Fundacion Juan Pablo II</span>
                    <br>
                    <span class="ms-1 font-weight-bold text-white ms-5">la vida por ti</span>
                </div>            
            </div>
            <hr class="horizontal light">
            <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="{{route('ajustes')}}">
                                <span class="sidenav-mini-icon"> <i class="material-icons opacity-10">settings</i> </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Ajustes </span>
                            </a>
                        </li>
                    </li>

                    <hr class="horizontal light mt-0 mb-2">

                    <li class="nav-item">
                        <div class="collapse show" id="pagesExamples">
                            <ul class="nav">
                            @if (Session::get('tipo') == 1)
                                <li class="nav-item ">
                                    <a class="nav-link text-white " href="{{route('dashboard')}}">
                                        <span class="sidenav-mini-icon"> D </span>
                                        <span class="sidenav-normal  ms-2  ps-1"> Dashboard </span>
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link text-white " href="{{route('proyectos')}}">
                                        <span class="sidenav-mini-icon"> P </span>
                                        <span class="sidenav-normal  ms-2  ps-1"> Proyectos </span>
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link text-white " href="{{route('usuarios')}}">
                                        <span class="sidenav-mini-icon"> U </span>
                                        <span class="sidenav-normal  ms-2  ps-1"> Usuarios </span>
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link text-white " href="{{route('clientes')}}">
                                        <span class="sidenav-mini-icon"> B </span>
                                        <span class="sidenav-normal  ms-2  ps-1"> Beneficiarios </span>
                                    </a>
                                </li>
                            @endif
                                <li class="nav-item ">
                                    <a class="nav-link text-white " href="{{route('tareasUsuario')}}">
                                        <span class="sidenav-mini-icon"> T </span>
                                        <span class="sidenav-normal  ms-2  ps-1"> Tareas </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </aside>
        {{-- end of sidebarr --}}

        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        {{--navBar--}}

        <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-2 top-1 px-0 py-1 mx-3 shadow-none border-radius-lg z-index-sticky" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-2">

                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item">
                        </li>
                        {{--
                        <li class="nav-item">
                            <a href="{{route('logout')}}"  class="nav-link py-0 px-1 line-height-0">
                                <i class="material-icons opacity-10">settings</i>
                            </a>
                        </li>
                        --}}
                        <li class="nav-item">
                            <a href="{{route('logout')}}" class="nav-link py-0 px-1 line-height-0">
                                <i class="material-icons opacity-10">logout</i>
                            </a>
                        </li>
                        {{--
                        <li class="nav-item dropdown py-0 pe-3">
                            <a href="javascript:;" class="nav-link py-0 px-1 position-relative line-height-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons opacity-10">notifications</i>
                                <span class="position-absolute top-5 start-100 translate-middle badge rounded-pill bg-danger border border-white small py-1 px-2">
                                <span class="small">11</span>
                                <span class="visually-hidden">unread notifications</span>
                                </span>
                            </a>
                        </li>
                        --}}
                    </ul>
                </div>
            </div>
        </nav>

        {{--end sidebar--}}

            <div class = "mt-2">
            {{-- content --}}
                <div>
                    @yield('content')
                </div>
            {{--end of content --}}
            </div>
        </main>

        {{-- footer --}}
        {{-- <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-12 col-md-6 my-auto">
                <div class="copyright text-center text-sm text-black text-lg-start">
                    Fundacion Juan Pablo II la vida por ti
                </div>
                </div>
                <div class="col-12 col-md-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                    <a href="https://www.facebook.com/FundacionJuanPabloIILaVidaPorTI/?locale=gl_ES" class="nav-link text-black" target="_blank">Facebook</a>
                    </li>
                    <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-black" target="_blank">Instagram</a>
                    </li>
                    <li class="nav-item">
                    <a href="https://www.creative-tim.com/blog" class="nav-link text-black" target="_blank">x (twitter)</a>
                    </li>
                    <li class="nav-item">
                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-black" target="_blank">Acerca de nosotros</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </footer> --}}
        {{-- end of footer --}}
        
        @include('layout/alertas');
        <script src="../resources/js/plugins/fullcalendar.min.js"></script>
        <script src="../resources/js/plugins/chartjs.min.js"></script>
        <script src="../resources/js/core/bootstrap.min.js"></script>
        <script src="../resources/js/jquery.min.js"></script>
        <script src="../resources/js/sweetalert2.js"></script>
        <script src="../resources/js/perfect-scrollbar.min.js"></script>
        <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>

        @yield("js")
    </body>
</html>
