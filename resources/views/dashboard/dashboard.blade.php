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
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the messages -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!-- User Image -->
                                                    <img src="{{asset('assets/upload/user3-128x128.jpg')}}"
                                                         class="img-circle" alt="User Image"/>
                                                </div>
                                                <!-- Message title and timestamp -->
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <!-- The message -->
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                    </ul>
                                    <!-- /.menu -->
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        {{--<li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class="menu">
                                        <li><!-- start notification -->
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li><!-- end notification -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>--}}
                        <!-- Tasks Menu -->
                        {{--<li class="dropdown tasks-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- Inner menu: contains the tasks -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <!-- Task title and progress text -->
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <!-- The progress bar -->
                                                <div class="progress xs">
                                                    <!-- Change the css width attribute to simulate progress -->
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>--}}
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{asset('assets/upload/user3-128x128.jpg')}}" class="user-image"
                                     alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Admin</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{asset('assets/upload/user3-128x128.jpg')}}" class="img-circle"
                                         alt="User Image"/>

                                    <p>
                                        Admin - Web Developer
                                        <small>Member since Mar. 2015</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                {{--<li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                </li>--}}
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    {{--<div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>--}}
                                    <div class="pull-right">
                                        <a href="{{url('auth/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
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

                <!-- search form (Optional) -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">BLOG</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class="active"><a href="{{url('#')}}"><i class="fa fa-link"></i> <span>Créer une
                                Conférence</span></a>
                    </li>
                    {{--<li><a href="#"><i class="fa fa-link"></i> <span>New Comment</span></a></li>--}}
                    <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Edit</span> <i
                                    class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('comment')}}">Comments</a></li>
                            <li><a href="{{url('post')}}">Conférences</a></li>
                        </ul>
                    </li>
                    <li class="header">NAVIGATION</li>
                    <li><a href="{{url('/')}}"><span>Retour au site</span></a></li>
                    <li><a href="{{url('auth/logout')}}"><span>Déconnexion</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Conférences
                    <small>Conf-PHP</small>
                </h1>
                <div class="post">
                    <table class="u-full-width table table-striped">
                        <thead>
                        <tr>
                            <th>Statut</th>
                            <th>Titre</th>
                            <th>Date début et fin</th>
                            <th>Mots clefs</th>
                            <th>Changer le statut</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->status}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->date_start.' - '.$post->date_end}}</td>
                                <td>
                                    @foreach($post->tags()->get() as $tag)
                                        {{$tag->name.'. '}}
                                    @endforeach
                                </td>
                                <td>
                                    {!!Form::open([
                                'url' => 'dashboard/'.$post->id.'/change-status',
                                'method' => 'put',
                                ])!!}
                                    @if($post->status=='publish')
                                        <button class="btn btn-warning">UN-PUBLISH</button>
                                    @else
                                        <button class="btn btn-success">PUBLISH</button>
                                    @endif
                                    {!!Form::close()!!}
                                </td>
                                <td>
                                    <button class="btn btn-danger">SUPPRIMER</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">

                @section('content')


                @show

            </section>
            <!-- /.content -->
        </div>
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
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Activité récente</h3>
                    {{--<ul class="control-sidebar-menu">--}}
                    {{--<li>--}}
                    {{--<a href="javascript::;">--}}
                    {{--<i class="menu-icon fa fa-birthday-cake bg-red"></i>--}}
                    {{--<div class="menu-info">--}}
                    {{--<h4 class="control-sidebar-subheading">Admin's Birthday</h4>--}}
                    {{--<p>Will be 26 on September 10th</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--</ul><!-- /.control-sidebar-menu -->--}}
                </div>

                <!-- /.tab-pane -->
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
