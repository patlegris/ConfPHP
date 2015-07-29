<!doctype html>
<head>
    @include('includes.head')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
{{--Header of the page--}}
@include('includes.header')

{{--Content body--}}
@yield('body')

{{--Sidebar of the page--}}
@include('includes.sidebar')

{{--Footer of the page--}}
@include('includes.footer')
</body>
</html>