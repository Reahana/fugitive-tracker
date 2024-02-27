@extends('front.officer.master')

@section('title')
    Manage Filed Case
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Filed Case info goes here</div>
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
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Case ID</th>
                            <th>NID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Case Clause</th>
                            <th> Law</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cases as $case)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$case->c_id}}</td>
                                <td>{{$case->nid}}</td>
                                <td>{{$case->name}}</td>
                                <td>{{$case->contact}}</td>
                                <td>{{$case->clause}}</td>
                                <td>{{$case->title}}</td>


                                <td>
                                    <a href="{{route('request-dismiss', ['id' => $case->id])}}" class="btn btn-success btn-xs">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection