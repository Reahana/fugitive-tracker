@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">All Citizen Information</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>NID</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($citizens as $citizen)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$citizen->nid}}</td>
                                <td>{{$citizen->name}}</td>
                                <td>{{$citizen->dob}}</td>
                                <td>{{$citizen->image}}</td>
                                <td>
                                    <a href="{{route('edit-nid', ['id' => $citizen->id])}}" class="btn btn-success btn-sm" title="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm " onclick="event.preventDefault(); document.getElementById('citizenDeleteForm{{$citizen->id}}').submit();" title="Delete" >
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                    <form action="{{route('nid.delete', ['id' => $citizen->id])}}" method="POST" id="citizenDeleteForm{{$citizen->id}}">
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
