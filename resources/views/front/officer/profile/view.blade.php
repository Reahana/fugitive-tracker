@extends('front.officer.master')

@section('title')
    View Profile
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-4 mx-3 py-3">
                <div class="ibox-head">
                    <div class="font-bold font-26 text-info">Officer Profile</div>
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
                    @foreach($officers as $officer)
                        <table class="table table-bordered font-20" >
                            <tbody >
                            <tr>
                                <th width="30%">Officer</th>
                                <td colspan="2" >{{$officer->p_id}}</td>
                                <td rowspan="3" ><img src="{{asset($officer->image)}}" alt="" width="120" height="150"></td>
                            </tr>
                            <tr>
                                <th>Officer Name</th>
                                <td colspan="2">{{$officer->name}}</td>
                            </tr>
                            <tr>
                                <th>Officer Rank</th>
                                <td colspan="2">{{$officer->rank}}</td>
                            </tr>

                            <tr>
                                <th>Contact Number</th>
                                <td colspan="3">{{$officer->number}}</td>
                            </tr>
                                <tr>
                                <th >Email</th>
                                <td colspan="3">{{$officer->email}}</td>
                            </tr>
                            <tr>
                                <th>Posting</th>
                                <td colspan="3">{{$officer->posting}}</td>
                            </tr>


                            @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
@endsection