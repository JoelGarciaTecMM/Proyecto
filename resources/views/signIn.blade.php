
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_9Kj90bj0TvGpMXEv4MkTVWdjGTgmJ0zi7Q&s">

        <title>
            Inicio de sesión
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="../resources/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../resources/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="../resources/css/material-dashboard.css?v=3.0.6" rel="stylesheet" />
        <!-- Nepcha Analytics (nepcha.com) -->
        <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
        <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    </head>

    <body class="bg-gray-200">

    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://img.freepik.com/vector-gratis/telon-fondo-abstracto-estilo-poli-presentacion-moderna_1017-53594.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Inicio de sesión</h4>
                    <div class="row mt-3">
                        <div class="col-2 text-center ms-auto">
                        <a class="btn btn-link px-3" href="javascript:;">
                            <i class="fa fa-facebook text-white text-lg"></i>
                        </a>
                        </div>
                        <div class="col-2 text-center px-1">
                        <a class="btn btn-link px-3" href="javascript:;">
                            <i class="fa fa-github text-white text-lg"></i>
                        </a>
                        </div>
                        <div class="col-2 text-center me-auto">
                        <a class="btn btn-link px-3" href="javascript:;">
                            <i class="fa fa-google text-white text-lg"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start" method="POST" action="{{route('login')}}">
                        @csrf
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Correo</label>
                        <input type="email" name = "correo" id = "correo" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name = "contraseña" id = "contraseña" class="form-control">
                    </div>

                    <!-- <div class="form-check form-switch d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                        <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                    </div> -->

                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Iniciar sesión</buttton>
                    </div>
                    <p class="mt-4 text-sm text-center">
                        ¿No recuerdas tu contraseña?
                        <a href="../../../pages/authentication/signup/illustration.html" class="text-primary text-gradient font-weight-bold">click aquí</a>
                    </p>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-12 col-md-6 my-auto">
                <div class="copyright text-center text-sm text-white text-lg-start">
                    Fundacion Juan Pablo II la vida por ti
                </div>
                </div>
                <div class="col-12 col-md-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                    <a href="https://www.facebook.com/FundacionJuanPabloIILaVidaPorTI/?locale=gl_ES" class="nav-link text-white" target="_blank">Facebook</a>
                    </li>
                    <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">Instagram</a>
                    </li>
                    <li class="nav-item">
                    <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">x (twitter)</a>
                    </li>
                    <li class="nav-item">
                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white" target="_blank">Acerca de nosotros</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </footer>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="../resources/js/core/popper.min.js"></script>
    <script src="../resources/js/core/bootstrap.min.js"></script>
    <script src="../resources/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../resources/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- Kanban scripts -->
    <script src="../resources/js/plugins/dragula/dragula.min.js"></script>
    <script src="../resources/js/plugins/jkanban/jkanban.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../resources/js/material-dashboard.min.js?v=3.0.6"></script>
    </body>

</html>