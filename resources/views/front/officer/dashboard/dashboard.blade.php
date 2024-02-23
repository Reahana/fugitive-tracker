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
        <h1 class="page-title">Welcome
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
            <div class="col-lg-8 col-md-8">
                <div class="ibox">
                    <div class="ibox-body text-center">
                        <div class="m-t-20">
                            @foreach($officers as $officer )
                                <img class="img-circle" src="{{asset($officer->image)}}" alt="" height="100" />
                        </div> {{--photo--}}
                        <h4 class="font-strong m-b-10 m-t-10">{{ $officer->name }} </h4>
                        <h5 class="m-b-20 text-muted"><b>{{ $officer->rank }} </b>

                        </h5>
                        <div class="profile-social m-b-20" style="font-size:30px">
                            {{--<a href="javascript:;"><i class="fab fa-twitter"></i></a>--}}
                            <a href="" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="tel:{{$officer->number}}"><span title="{{$officer->number}}"><i class="fas fa-mobile-alt"></i></span></a>
                            <a href="mailto:{{$officer->email}}"><span title="{{$officer->email}}"><i  class="fas fa-envelope"></i></span></a>
                        </div> {{--links--}}
                    </div>
                </div>
            </div>
            {{--<div class="col-lg-9 col-md-7"></div>--}}
            @endforeach
        </div><!-- row    -->
    </div><!-- content -->
@endsection