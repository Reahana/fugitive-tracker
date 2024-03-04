@extends('admin.master')
@section('title')
    Manage Area |
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">All Area Information</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Area no</th>
                            <th>Area Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($areas as $area)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$area->area_no}}</td>
                                <td>{{$area->name}}</td>

                                <td>
                                    <a href="{{route('edit-area', ['id' => $area->id])}}" class="btn btn-success btn-sm" title="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm " onclick="event.preventDefault(); document.getElementById('areaDeleteForm{{$area->id}}').submit();" title="Delete" >
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                    <form action="{{route('area.delete', ['id' => $area->id])}}" method="POST" id="areaDeleteForm{{$area->id}}">
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
