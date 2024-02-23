<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    @include('admin.includes.meta')
    <title> Fugitive Tracker </title>
    <!-- css -->
    @include('admin.includes.style')
</head>

<body>
<div class="pt-5">
    <h1 class="py-5 "align="center">
        Registration of
        @if(auth()->user()->role_id==1)
            <b>Officer</b>

        @endif
        <span class="text-uppercase text-success">{{ Auth::user()->name }} </span>
        is Complete.
    </h1>
    <p class="font-24 text-info " align="center">
        Please Logout to further process <br/><br>
        <a class="btn btn-danger" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
            <i class="fa fa-power-off"></i> Logout
        </a>
    <form action="{{route('logout')}}" method="POST" id="logoutForm">
        @csrf
    </form>

    </p>
</div>

@include('admin.includes.script')
</body>

</html>
