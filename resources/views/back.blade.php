<!doctype html>
{{--Compatibility script IE, Meta & Scripts of the page--}}
@include('front.includes.head')

<body>
{{--Header of the page--}}
@include('front.includes.header')

{{--Content body--}}
@yield('body')

{{--Footer of the page--}}
@include('front.includes.footer')
</body>
</html>