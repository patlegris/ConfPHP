<!doctype html>
{{--Compatibility script IE, Meta & Scripts of the page--}}
@include('includes.head')

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