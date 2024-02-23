@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">All User Information</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Rank</th>
                            <th>Posting</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($officers as $officer)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$officer->p_id}}</td>
                            <td>{{$officer->name}}</td>
                            <td>{{$officer->rank}}</td>
                            <td>{{$officer->posting}}</td>
                            <td>{{$officer->number}}</td>
                            <td>{{$officer->email}}</td>
                            <td>{{$officer->image}}</td>

                            <td>
                                <a href="{{route('edit-officer', ['id' => $officer->id])}}" class="btn btn-success btn-sm" title="Edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm " onclick="event.preventDefault(); document.getElementById('officerDeleteForm{{$officer->id}}').submit();" title="Delete" >
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                                <form action="{{route('officer.delete', ['id' => $officer->id])}}" method="POST" id="officerDeleteForm{{$officer->id}}">
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
