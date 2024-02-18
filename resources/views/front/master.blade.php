<!DOCTYPE html>
<html lang="en">
<head>
    {{--meta--}}
    @include(('front.includes.meta'))
    {{--css--}}
    @include('front.includes.style')
    <title>@yield('title')Fugitive Tracker </title>
</head>
<body>


<!-- ====== menu ====== -->
@include('front.includes.menu')

@yield('body')

<!-- footer -->
@include('front.includes.footer')

{{--js--}}
@include('front.includes.script')
</body>
</html>