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
                    <li class="active"><a href="{{url('#')}}"><i class="fa fa-link"></i> <span>Créer une
                            Conférence</span></a>
                    </li>
                    <li class="header"></li>
                    <li><a href="{{url('auth/logout')}}"><span>Déconnexion</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        {!! Form::open(['url'=>'post', 'method' => 'POST']) !!}
        <div class="form-group col-lg-6">
            <div>
                {!! Form::label('title', 'Title(*):',['class' => 'col-sm-2 col-md-2 col-lg-2 control-label', 'for'=>'title']) !!}
                {!! Form::text('title', old('title'), ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'title', 'required']) !!}
                {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
            </div>

            <div>
                {!! Form::label('content', 'Content:',['class' => 'col-sm-2 col-md-2 col-lg-2 control-label', 'for'=>'content']) !!}
                {!! Form::textarea('content', '',['cols'=>30, 'rows'=>10, 'id' => 'content','placeholder' => 'Ecrivez votre post ici','required']) !!}
                {!! $errors->first('content', '<span class="help-block">:message</span>') !!}
            </div>

            <div>
                {!! Form::label('status', 'Status:',['class' => 'col-sm-2 col-md-2 col-lg-2 control-label', 'for'=>'status']) !!}
                publier : {!! Form::radio('status', 'publish',['cols'=>30, 'rows'=>10, 'required']) !!}
                brouillon : {!! Form::radio('status', 'unpublish',['cols'=>30, 'rows'=>10, 'required']) !!}
                {!! $errors->first('status', '<span class="help-block">:message</span>') !!}
            </div>

            @if(count($categories)>0)
                @foreach($categories as $category)
                    <div class="checkbox">
                        {!! Form::label('category', $category->title,['class' => 'col-sm-2 col-md-2 col-lg-2 control-label', 'for'=> 'cat'.$category->id]) !!}
                        {!! Form::radio('category', $category->id, ['id' => 'cat'.$category->id, 'required'])!!}
                    </div>
                @endforeach
            @endif

            <div>
                {!! Form::submit('Create') !!}
                {!! Form::close() !!}
            </div>
        </div>
        @show

                <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Design by Patrick LECOINTRE - 2015
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2015 <a href="{{url('about')}}">ConfPHP</a>.</strong> All rights reserved.
        </footer>

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

                            <p><a href="{{url('auth/logout')}}">Logout</a></p>
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

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
    </body>
@endsection
