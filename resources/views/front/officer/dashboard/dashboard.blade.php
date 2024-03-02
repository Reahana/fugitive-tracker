@extends('front.officer.master')

@section('title')
    Officers Dashboard |
    @endsection
@section('body')
    <div class="page-heading">
        @if($message = Session::get('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{$message}}!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <h1 class="page-title">Welcome Officer
            {{auth()->user()->name}}
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=""><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Overview</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <div class="ibox">
                    <div class="ibox-body text-center">
                        <div class="m-t-20">
                            @foreach($officers as $officer )
                                <img class="img-circle" src="{{asset($officer->image)}}" alt="" height="100" />
                        </div> {{--photo--}}
                        <h2 class="font-strong m-b-10 m-t-10">{{ $officer->name }} </h2>
                        <h3 class="m-b-20 text-muted"><b>{{ $officer->rank }} </b></h3>
                        <h4 class="m-b-20 m-t-10  "><i class="fas fa-location-dot text-primary"></i> Posting: {{$officer->posting}}</h4>
                        <h4 class="font-strong m-b-20"><i class="fas fa-mobile-alt text-info"></i> {{$officer->number}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                    <h1 class="text-danger"><i class="fa-solid fa-handcuffs "></i></h1>
                                    <h3>Filed Case:</h3>
                                    <h3>
                                      {{$case + $dismiss}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                   <h1 class="text-success font-weight-bold"> <i class="fa-solid fa-scale-balanced"></i></h1>
                                    <h3>  Dismissed Case:</h3>
                                    <h3>{{$dismiss}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div><!-- row    -->
    </div><!-- content -->
@endsection