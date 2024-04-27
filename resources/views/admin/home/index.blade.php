@extends('admin.master')
@section('title')
    Admin Dashboard |
    @endsection
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                            <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-primary ms-2">
                            <i class="mdi mdi-autorenew"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-primary ms-1">
                            <i class="mdi mdi-filter-variant"></i>
                        </a>
                    </form>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-7 ">


            <div class="row">

                <div class="col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <h1><i class="fa-solid fa-scale-balanced"></i></h1>
                            <h5 class="text-muted fw-bold fs-3 mt-0" title="Growth"> Dismiss Queue : {{$req}}</h5>
                            {{--<h3 class="mt-3 mb-3"></h3>--}}
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <h1><i class="fa-solid fa-gavel"></i></h1>
                            <h5 class="text-muted fw-bold fs-3 mt-0" title="Growth">Solve Case : {{$dismiss - $req}}</h5>
                            {{--<h3 class="mt-3 mb-3"></h3>--}}
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <h1><i class="fa-solid fa-handcuffs"></i></h1>
                            <h5 class="text-muted fw-bold fs-3 mt-0" title="Average Revenue"> Total Case Filed  : {{$allcase}} </h5>
                            {{--<h3 class="mt-3 mb-3">{{$case + $dismiss -$req }}</h3>--}}
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <h1><i class="fa-solid fa-scale-unbalanced"></i></h1>
                            <h5 class="text-muted fw-bold fs-3 mt-0" title="Average Revenue"> Pending Case  : {{$case -$req }}</h5>
                            {{--<h3 class="mt-3 mb-3"></h3>--}}
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->


            <div class="row">
                <div class="col-sm-12">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <h1><i class="fa-solid fa-user-secret"></i></h1>
                            <h5 class="text-muted fw-bold fs-3 mt-0" title="Number of Orders">Total Officers: {{$officer}} </h5>
                            {{--<h3 class="mt-3 mb-3"></h3>--}}
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="col-sm-12">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <h1><i class="fa-solid fa-people-group"></i></h1>
                            <h5 class="text-muted fw-bold fs-3 mt-0" title="Number of Citizens">Citizens: {{$citizen}}</h5>
                            {{--<h3 class="mt-3 mb-3">{{$citizen}}</h3>--}}
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->


            </div> <!-- end row -->


        </div> <!-- end col -->

        <div class="col-xl-5 ">
            <div class="card ">
                <div class="d-flex card-header align-items-center justify-content-center">
                    <img src="{{asset('/')}}admin/assets/images/bd-map.png" alt="" width="100%" height="50%" >

                </div>
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row -->



@endsection
