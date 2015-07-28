<!doctype html>
{{--Compatibility script IE, Meta & Scripts of the page--}}
@include('includes.head')

{{--Partie Bootstrap DS--}}
        <!-- Bootstrap Core CSS -->
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
{{--<!-- Custom CSS -->--}}
<link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">
{{--<!-- Morris Charts CSS -->--}}
<link href="{{asset('assets/css/plugins/morris.css')}}" rel="stylesheet">
{{--<!-- Custom Fonts -->--}}
<link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<body>
{{--Header of the page--}}
@include('includes.header')

{{--Content body--}}
@yield('body')

{{--Footer of the page--}}
@include('includes.footer')
</body>
</html>