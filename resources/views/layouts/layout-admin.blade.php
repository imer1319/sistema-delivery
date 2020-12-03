<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- Switchery css -->
    <link href="{{ asset('admin/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="{{ asset('admin/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css" />   

    <!-- BEGIN CSS for this page -->

    <!-- END CSS for this page -->

</head>

<body>

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="index.html" class="logo"><img alt="logo" src="{{ asset('admin/assets/images/logo.png') }}" /> <span>Admin</span></a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('admin/assets/images/avatars/admin.png') }}" alt="Profile image" class="avatar-rounded">
                        </a>
                        @guest
                        
                        @else
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Hola, {{ Auth::user()->name }}</small> </h5>
                            </div>

                            <!-- item-->
                            <a href="pro-profile.html" class="dropdown-item notify-item">
                                <i class="fa fa-user"></i> <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                <i class="fa fa-power-off"></i> <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>   
                        </div>
                    </li>
                    @endguest
                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </li>                        
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->


        <!-- Left Sidebar -->
        <div class="left main-sidebar">
            <div class="sidebar-inner leftscroll">
                <div id="sidebar-menu">
                    <ul>
                        <li class="submenu">
                            <a href="{{ route('home') }}"><i class="fa fa-fw fa-shopping-cart"></i><span> Inicio </span> </a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-fw fa-users"></i><span> Empresas </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('companies.index') }}">Lista de empresas</a></li>
                                <li><a href="{{ route('companies.create') }}">Crear nueva empresa</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-fw fa-users"></i></i> <span> Operadores </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('operators.index') }}">Lista de operadores</a></li>
                                <li><a href="{{ route('operators.create') }}">Crear nuevo operador</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-fw fa-motorcycle"></i> <span> Drivers </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('drivers.index') }}">Lista de Drivers</a></li>
                                <li><a href="{{ route('drivers.create') }}">Crear nuevo Driver</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-fw fa-user"></i> <span> Clientes </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('clients.index') }}">Lista de Clientes</a></li>
                                <li><a href="{{ route('clients.create') }}">Crear nuevo cliente</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-fw fa-credit-card-alt"></i> <span> Restaurantes </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('restaurants.index') }}">Lista de restaurantes</a></li>
                                <li><a href="{{ route('restaurants.create') }}">Crear nuevo restaurante</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- End Sidebar -->


        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-12"> 

                            @yield('admin-content')

                        </div>
                    </div>
                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        <footer class="footer">
            <span class="text-right">
                Copyright <a target="_blank" href="#">Your Website</a>
            </span>
            <span class="float-right">
                Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
            </span>
        </footer>

    </div>
    <!-- END main -->

    <script src="{{ asset('admin/assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/moment.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/detect.js') }}"></script>
    <script src="{{ asset('admin/assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/switchery/switchery.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/pikeadmin.js') }}"></script>

    <!-- BEGIN Java Script for this page -->

    <!-- END Java Script for this page -->

</body>
</html>