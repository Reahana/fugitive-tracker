@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Case for Dismiss</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Officer ID</th>
                            <th>Case ID</th>
                            <th>NID</th>
                            <th>Name</th>
                            <th>Contact
                            <th>Area</th>
                            <th>Case Clause</th>
                            <th> Law</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cases as $case)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$case->p_id}}</td>
                                <td>{{$case->c_id}}</td>
                                <td>{{$case->nid}}</td>
                                <td>{{$case->name}}</td>
                                <td>{{$case->contact}}
                                <td>{{$case->area}}</td>
                                <td>{{$case->clause}}</td>
                                <td>{{$case->title}}</td>
                                <td>

                                    <a href="" class="btn btn-danger btn-sm " onclick="event.preventDefault(); document.getElementById('caseDeleteForm{{$case->id}}').submit();" title="Delete" >
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                    <form action="{{route('case.delete', ['id' => $case->id])}}" method="POST" id="caseDeleteForm{{$case->id}}">
                                        @csrf
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
