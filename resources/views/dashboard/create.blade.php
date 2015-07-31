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


        <!-- Main content -->
        @section('content')
                <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Conférences
                    <small>Conf-PHP</small>
                </h1>
                <div class="post">
                    {!! Form::open(['url'=>'post', 'method' => 'POST']) !!}
                    <div class="form-group col-lg-6">
                        <br>

                        {{--Titre--}}
                        <div>
                            {!! Form::label('title', 'Titre :',['class' => 'col-sm-2 col-md-2 col-lg-2 control-label', 'for'=>'title']) !!}
                            {!! Form::text('title', old('title'), ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'title', 'required']) !!}
                            {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                            @foreach($errors->get('title') as $message)
                                <div class="text-danger text"><em>{{ $message }}</em></div>
                            @endforeach
                        </div>

                        {{--Excerpt - résumé--}}
                        <div>
                            <br>
                            {!! Form::label('excerpt', 'Résumé :',['class' => 'col-sm-2 col-md-2 col-lg-2 control-label', 'for'=>'excerpt']) !!}
                            {!! Form::textarea('excerpt', '',['cols'=>101, 'rows'=>2, 'maxlength' => '150', 'id' => 'content','placeholder' => 'Ecrivez votre résumé ici (150 caractères max.)','required']) !!}
                            {!! $errors->first('content', '<span class="help-block">:message</span>') !!}
                            @foreach($errors->get('excerpt') as $message)
                                <div class="text-danger text"><em>{{ $message }}</em></div>
                            @endforeach
                        </div>

                        {{--Content--}}
                        <div>
                            <br>
                            {!! Form::label('content', 'Contenu :',['class' => 'col-sm-2 col-md-2 col-lg-2 control-label', 'for'=>'content']) !!}
                            {!! Form::textarea('content', '',['cols'=>101, 'rows'=>10, 'id' => 'content','placeholder' => 'Ecrivez la présentation de votre conférence ici','required']) !!}
                            {!! $errors->first('content', '<span class="help-block">:message</span>') !!}
                            @foreach($errors->get('content') as $message)
                                <div class="text-danger text"><em>{{ $message }}</em></div>
                            @endforeach
                        </div>

                        {{--slug--}}
                        <div>
                            <br>
                            {!! Form::label('slug', 'Slug :', ['class' => 'col-sm-2 col-md-2 col-lg-2 control-label']) !!}
                            {!! Form::text('slug', '', ['class' => 'form-control', 'placeholder' => 'Slug pour le référencement']) !!}
                            @foreach($errors->get('slug') as $message)
                                <div class="text-danger text"><em>{{ $message }}</em></div>
                            @endforeach
                            <br>
                        </div>

                        {{--Dates--}}
                        <div class="container">
                            <div class="form-group input-group col-md-4">
                                <div class='input-group date' id='datetimepicker6'>
                                    {!! form::label('date_start',' date de début: ' , ['class'=>'input-group-addon','required']) !!}
                                    {!! Form::text('date_start', old('date_start'), ['class'=>'form-control','required']) !!}
                                    {!! $errors->first('date_start', '<span class="help-block">:message</span>') !!}
                                    <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
                                </div>
                            </div>
                            <div class="form-group input-group col-md-4">
                                <div class='input-group date' id='datetimepicker7'>
                                    {!! form::label('date_end', 'date de fin: ', ['class'=>'input-group-addon','required']) !!}
                                    {!! Form::text('date_end', old('date_end'), ['class'=>'form-control','required']) !!}
                                    {!! $errors->first('date_end', '<span class="help-block">:message</span>') !!}
                                    <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
                                </div>
                            </div>
                        </div>

                        {{--tags--}}
                        {{--<div class="form-group">--}}
                        {{--{!! Form::label('tags', 'Tags', ['class' => 'col-lg-offset-2 col-lg-1 control-label']) !!}--}}
                        {{--<div class="col-lg-7">--}}
                        {{--@foreach($tags as $tag)--}}
                        {{--<div class="checkbox">--}}
                        {{--<label>--}}
                        {{--{!! Form::checkbox('tags[]', $tag->id) !!}--}}
                        {{--{{ $tag->name }}--}}
                        {{--</label>--}}
                        {{--</div>--}}
                        {{--@endforeach--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--url--}}
                        <div>
                            <br>
                            {!! Form::text('url_site', 'Remplacez ce texte par l\'url du site officiel de la conférence', ['class' => 'form-control', 'placeholder' => 'http://www.my-conference.com']) !!}
                            @foreach($errors->get('url_site') as $message)
                                <div class="text-danger"><em>{{ $message }}</em></div>
                            @endforeach
                        </div>

                        {{--Thumbnail--}}
                        <div class="form-group">
                            <br>
                            FIchier image de la conférence :
                            {!! Form::label('thumbnail_link', 'Image', ['class' => 'control-label']) !!}
                            <div class="col-lg-7">
                                <div class="input-group ">
                                    {!! Form::file('thumbnail_link') !!}
                                    @foreach($errors->get('thumbnail_link') as $message)
                                        <div class="text-danger"><em>{{ $message }}</em></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{--Status--}}
                        <div>
                            <br>
                            {!! Form::label('status', 'Status:',['class' => 'col-sm-2 col-md-2 col-lg-2
                            control-label', 'for'=>'status']) !!}
                            Publish : {!! Form::radio('status', 'publish',['cols'=>100, 'rows'=>10, 'required']) !!}
                            Un-publish : {!! Form::radio('status', 'un-publish',['cols'=>30, 'rows'=>10, 'required'])
                             !!}
                            {!! $errors->first('status', '<span class="help-block">:message</span>') !!}
                        </div>

                        {{--Submit--}}
                        <div>
                            {!! Form::submit('Envoyer') !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
        @show

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
