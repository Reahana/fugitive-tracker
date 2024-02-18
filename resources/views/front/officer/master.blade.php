<!DOCTYPE html>
<html lang="en">

<head>
   {{--meta--}}
    @include('front.officer.includes.meta')
    <title> @yield('title') Fugitive Tracker </title>

{{--css--}}
   @include('front.officer.includes.style')
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
<div class="page-wrapper">
    <!-- START HEADER-->
@include('front.officer.includes.header')
    <!-- END HEADER-->
    <!-- START SIDEBAR-->
@include('front.officer.includes.menu')
    <!-- END SIDEBAR-->
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-content fade-in-up">
@yield('body')




        </div>
        <!-- END PAGE CONTENT-->
        {{--footer--}}
        @include('front.officer.includes.footer')
    </div>
</div>
<!-- BEGIN THEME CONFIG PANEL-->

<!-- END THEME CONFIG PANEL-->
<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
    <div class="page-preloader">Loading</div>
</div>
<!-- END PAGA BACKDROPS-->
{{--js--}}
@include('front.officer.includes.script')

</body>

</html>