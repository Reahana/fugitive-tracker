@extends('front.officer.master')
@section('title')
    Add new NID |
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Add NID Form</div>
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
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Case ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="c_id" placeholder=" Case ID"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> NID</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="nid" id="nid">
                                    <option> -- Select NID -- </option>
                                    @foreach($citizens as $citizen)
                                        <option value="{{$citizen->nid}}">{{$citizen->nid}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                               <select class="form-control" name="name" id="name">
                                    <option> -- Select Name -- </option>
                                    @foreach($citizens as $citizen)
                                        <option value="{{$citizen->name}}">{{$citizen->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Contact Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="contact" placeholder="Contact Number"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Clause</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="clause" id="clause">
                                    <option> -- Select Clause -- </option>
                                    @foreach($laws as $law)
                                        <option value="{{$law->clause}}">{{$law->clause}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="title" id="title">
                                    <option> -- Select title -- </option>
                                    @foreach($laws as $law)
                                        <option value="{{$law->title}}">{{$law->title}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Add New NID</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection