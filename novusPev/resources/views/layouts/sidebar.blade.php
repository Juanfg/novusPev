<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>novusPev</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('assetsSidebar/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('assetsSidebar/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('assetsSidebar/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset('assetsSidebar/vendor/font-awesome/css/font-awesome.min.cs')}}s" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('/home') }}">novusPev</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <img src="{{Storage::url('public/TecnologicoDeMonterreyLogo.png')}}" width="50px">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ route('/home') }}"><i class="fa fa-home fa-fw"></i> Inicio</a>
                        </li>
                        @role('administrador')
                            <li>
                                <a href="{{ route('admin.index') }}"><i class="fa fa-lock fa-fw"></i> Control de usuarios</a>
                            </li>
                        @endrole
                        @role('administrador|director|pev')
                            <li>
                                <a href="{{ route('profesores.index') }}"><i class="fa fa-coffee fa-fw"></i> Profesores</a>
                            </li>
                        @endrole
                        @role('administrador|director')
                            <li>
                                <a href="{{ route('directores.index') }}"><i class="fa fa-user fa-fw"></i> Directores</i></a>
                            </li>
                            <li>
                                <a href="{{ route('campus.index') }}"><i class="fa fa-university fa-fw"></i> Campus</a>
                            </li>
                            <li>
                                <a href="{{ route('paises.index') }}"><i class="fa fa-globe fa-fw"></i> Paises</a>
                            </li>
                            <li>
                                <a href="{{ route('areasInteres.index') }}"><i class="fa fa-book fa-fw"></i> Areas de Inter&eacute;s</a>
                            </li>
                            <li>
                                <a href="{{ route('horarios.index') }}"><i class="fa fa-clock-o fa-fw"></i> Horarios</a>
                            </li>
                            <li>
                                <a href="{{ route('idiomas.index') }}"><i class="fa fa-language fa-fw"></i> Idiomas</a>
                            </li>
                            <li>
                                <a href="{{ route('materias.index') }}"><i class="fa fa-graduation-cap fa-fw"></i> Materias</a>
                            </li>
                            <li>
                                <a href="{{ route('periodos.index') }}"><i class="fa fa-calendar-o fa-fw"></i> Periodos</a>
                            </li>
                            <li>
                                <a href="{{ route('semestres.index') }}"><i class="fa fa-calendar fa-fw"></i> Semestres</a>
                            </li>
                            <li>
                                <a href="{{ route('evaluaciones.index') }}"><i class="fa fa-check fa-fw"></i> Evaluaciones</a>
                            </li>
                            <li>
                                <a href="{{ route('departamentos.index') }}"><i class="fa fa-building fa-fw"></i> Departamentos</a>
                            </li>
                            <li>
                                <a href="{{ route('horarios.index') }}"><i class="fa fa-clock-o fa-fw"></i> Horarios</a>
                            </li>
                        @endrole
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">@yield('title')</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                @yield('description')
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{URL::asset('assetsSidebar/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('assetsSidebar/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::asset('assetsSidebar/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <script src="{{URL::asset('assetsSideBar/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assetsSideBar/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assetsSideBar/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('assetsSidebar/dist/js/sb-admin-2.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>
