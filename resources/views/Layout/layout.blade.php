<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SOFTWARE CMS</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ url('img/icon.png') }}" type="image/png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ url('css/fonts.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/atlantis.min.css') }}">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ url('css/demo.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    @yield('styles')

</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                <div class="container-fluid">
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="{{ url('img/profile.jpg') }}" alt="avatar" class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <span>Nombre Ejemplo</span>
                                    <span class="user-level">
                                        Administrador
                                    </span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#">
                                            <span class="link-collapse">Mi Perfil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="link-collapse">Editar Perfil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('logout') }}">
                                            <span class="link-collapse">Salir</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Sub Menu -->
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="{{ url('/') }}">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Componentes</h4>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#RiesgosProcesos">
                                <i class="fas fa-box"></i>
                                <p>Riesgos en Procesos</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="RiesgosProcesos">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ url('import/documents') }}">
                                            <span class="sub-item">Mapa de procesos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Procesos</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="collapse" href="#RiesgosProcesos1">
                                            <i class="fas fa-box"></i>
                                            <p>Riesgos en Procesos</p>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="RiesgosProcesos1">
                                            <ul class="nav nav-collapse">
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Identificación del riesgo</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Riesgo inherente</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Riesgo residual</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Monitoreo y revisión</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Reportes de procesos, informes y graficas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Reporte de proceso y auditoria</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#Riesgosproyectos">
                                <i class="fas fa-box"></i>
                                <p>riesgos en proyectos</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Riesgosproyectos">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Proyectos</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="collapse" href="#Riesgosproyecto2">
                                            <i class="fas fa-box"></i>
                                            <p>Riesgos en proyecto</p>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="Riesgosproyecto2">
                                            <ul class="nav nav-collapse">
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Identificación del riesgo</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Riesgo inherente</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Riesgo residual</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Monitoreo y revisión</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Reporte de proyectos, informes y gracias</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Reporte de proyecto y auditoria</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#Parametrización">
                                <i class="fas fa-box"></i>
                                <p>Parametrización</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Parametrización">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Registrar macroproceso, procesos, subprocesos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Registrar actividades</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Definir responsables</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Registrar causas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Registrar consecuencias</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Definir escala de probabilidad e impacto</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Registrar medidas de prevención y
                                                recomendaciones</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Administrar indicadores</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Definir lista de contratista</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Definir lista de contratante</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Definir interventoría asignada</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- End Sub Menu -->
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        <div class="main-panel">
            <div class="content text-capitalize">
                <div class="panel-header bg-primary-gradient text-capitalize">
                    <div class="page-inner py-5">
                        @yield('barra-superior')
                    </div>
                </div>
                @yield('contenido')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licencia
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        Copyright © 2022, powered by <a href="tel:+57 3114360830"></a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!--   Core JS Files   -->
    <script src="{{ url('js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ url('js/core/popper.min.js') }}"></script>
    <script src="{{ url('js/core/bootstrap.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ url('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ url('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ url('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ url('js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ url('js/atlantis.min.js') }}"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{ url('js/setting-demo.js') }}"></script>


    <!-- Chart Circle -->
    <script src="{{ url('js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Fonts and icons -->
    <script src="{{ url('js/plugin/webfont/webfont.min.js') }}"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                "order": [
                    [2, 'asc']
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
                },
                "lengthMenu": [
                    [5, 10, -1],
                    [5, 10, "Todos"]
                ]
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
