@extends('dashmain')
@section('body')

    <body class="skin-purple-light sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="{{url('dashboard')}}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"> Menu</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Dashboard</b></span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{asset('assets/upload/user3-128x128.jpg')}}" class="img-circle" alt="User Image"/>
                    </div>
                    <div class="pull-left info">
                        <p>Admin</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">BLOG</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class="active"><a href="{{url('create')}}"><i class="fa fa-link"></i> <span>Créer une
                            Conférence</span></a>
                    </li>
                    <li class="header"></li>
                    <li><a href="{{url('auth/logout')}}"><span>Déconnexion</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>


        <div class="row">
        <div class="container">
            <div class="col-lg-offset-3 col-lg-6 well">
                {!! Form::open(['url' => 'login', 'class' => 'form-horizontal']) !!}
                <fieldset>
                    <legend class="text-center">Identification</legend>

                    <div class="form-group{{ ($errors->has('email')) ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Nom', ['class' => 'col-lg-3 control-label']) !!}
                        <div class="col-lg-9">
                            {!! Form::text('name', '', ['class' => 'form-control']) !!}
                        </div>
                        <div class="text-danger col-lg-offset-3 col-lg-9">
                            {{ $errors->first('name') }}
                        </div>
                    </div>

                    <div class="form-group{{ ($errors->has('password')) ? ' has-error' : '' }}">
                        {!! Form::label('password', 'Mot de passe', ['class' => 'col-lg-3 control-label']) !!}
                        <div class="col-lg-9">
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>
                        <div class="text-danger col-lg-offset-3 col-lg-9">
                            {{ $errors->first('password') }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 checkbox col-lg-5">
                            <label>{!! Form::checkbox('remember', 'remember', false) !!}Se souvenir de moi</label>
                        </div>

                        <div class="col-lg-4">
                            {!! Form::submit('Connexion', ['class' => 'form-control btn btn-success']) !!}
                        </div>
                    </div>
                </fieldset>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a>
                </li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <p><a href="{{url('/')}}">Retour au site</a></p>

                            <p><a href="{{url('/')}}">Logout</a></p>
                            {{--<label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked />
                            </label>--}}
                            {{--<p>
                                Some information about this general settings option
                            </p>--}}
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('assets/js/jQuery-2.1.4.min.js')}}" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/js/app.min.js')}}" type="text/javascript"></script>
    <!-- main JS -->
    <script src="{{asset('assets/js/main.js')}}" type="text/javascript"></script>
    <!-- Datetimepicker JS -->
    <script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
    </body>
@endsection
