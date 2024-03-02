@extends('admin.master')

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
        <div class="col-xl-5 col-lg-4">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h1><i class="fa-solid fa-people-group"></i></h1>
                            <h5 class="text-muted fw-bold fs-3 mt-0" title="Number of Citizens">Citizens: {{$citizen}}</h5>
                            {{--<h3 class="mt-3 mb-3">{{$citizen}}</h3>--}}
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-sm-12">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-cart-plus widget-icon"></i>
                            </div>
                            <h1><i class="fa-solid fa-user-secret"></i></h1>
                            <h5 class="text-muted fw-bold fs-3 mt-0" title="Number of Orders">Officers: {{$officer}} </h5>
                            {{--<h3 class="mt-3 mb-3"></h3>--}}
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-currency-usd widget-icon"></i>
                            </div>
                            <h1><i class="fa-solid fa-handcuffs"></i></h1>
                            <h5 class="text-muted fw-bold fs-3 mt-0" title="Average Revenue"> Case Filed : {{$case +$dismiss}}</h5>
                            {{--<h3 class="mt-3 mb-3"></h3>--}}
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-sm-12">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-pulse widget-icon"></i>
                            </div>
                            <h1><i class="fa-solid fa-scale-balanced"></i></h1>
                            <h5 class="text-muted fw-bold fs-3 mt-0" title="Growth">Dismiss Case : {{$dismiss}}</h5>
                            {{--<h3 class="mt-3 mb-3"></h3>--}}
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

        </div> <!-- end col -->

        <div class="col-xl-7 col-lg-8">
            <div class="card card-h-100">
                <div class="d-flex card-header align-items-center justify-content-center">
                    <img src="{{asset('/')}}admin/assets/images/map.png" alt="" width="100%" >
                    {{--<h4 class="header-title">Projections Vs Actuals</h4>--}}
                    {{--<div class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">--}}
                            {{--<i class="mdi mdi-dots-vertical"></i>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu dropdown-menu-end">--}}
                            {{--<!-- item-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item">Sales Report</a>--}}
                            {{--<!-- item-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item">Export Report</a>--}}
                            {{--<!-- item-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item">Profit</a>--}}
                            {{--<!-- item-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item">Action</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                {{--<div class="card-body pt-0">--}}
                    {{--<div dir="ltr">--}}
                        {{--<div id="high-performing-product" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>--}}
                    {{--</div>--}}

                {{--</div> <!-- end card-body-->--}}
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row -->

@endsection
