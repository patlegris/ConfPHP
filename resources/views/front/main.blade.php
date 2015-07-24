<!doctype html>
{{--Head and styles--}}
@include('front.includes.head')
<body>
{{--Browser update--}}
@include('front.includes.browser')
{{--Header--}}
@include('front.includes.header')
@yield('blog.single')
{{--Sidebar--}}
@include('front.includes.sidebar')
{{--Footer--}}
@include('front.includes.footer')
</body>
</html>