<!doctype html>
<head>
    @include('includes.head')
    <link rel="stylesheet" href="{{asset('assets/css/style_for_dashboard.css')}}">

</head>

<!-- FontAwesome 4.3.0 -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
      type="text/css"/>
<!-- Ionicons 2.0.0 -->
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
<!-- Theme style -->
<link href="{{asset('assets/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link href="{{asset('assets/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- iCheck -->
<link href="{{asset('assets/plugins/iCheck/flat/blue.css')}}" rel="stylesheet" type="text/css"/>
<!-- Morris chart -->
<link href="{{asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css"/>
<!-- jvectormap -->
<link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css"/>
<!-- Date Picker -->
<link href="{{asset('assets/plugins/datepicker/datepicker3.css')}}" rel="stylesheet" type="text/css"/>
<!-- Daterange picker -->
<link href="{{asset('assets/plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css"/>
<!-- bootstrap wysihtml5 - text editor -->
<link href="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet"
      type="text/css"/>

<body>

{{--Content body--}}
@yield('body')

{{--Footer of the page--}}
{{--@include('includes.footer')--}}
</body>
</html>