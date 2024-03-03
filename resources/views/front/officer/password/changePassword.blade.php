@extends('front.officer.master')
@section('title')
    Change Password
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Change Password Form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    @if($message = Session::get('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{$message}}!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{route('new.password')}}" method="POST" >
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Old Password: </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="old_password" placeholder="Old Password "/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">New Password:</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="password" placeholder="New Password"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Confirm Password:</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-primary btn-block" type="submit">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

