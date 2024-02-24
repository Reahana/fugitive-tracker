@extends('admin.master')

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
                            <th>Law ID</th>
                            <th>Clause</th>
                            <th>Title</th>
                            <th>Fine</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($laws as $law)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$law->l_id}}</td>
                                <td>{{$law->clause}}</td>
                                <td>{{$law->law}}</td>
                                <td>{{$law->fine}}</td>
                                <td>
                                    <a href="{{route('edit-law', ['id' => $law->id])}}" class="btn btn-success btn-sm" title="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm " onclick="event.preventDefault(); document.getElementById('lawDeleteForm{{$law->id}}').submit();" title="Delete" >
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                    <form action="{{route('law.delete', ['id' => $law->id])}}" method="POST" id="lawDeleteForm{{$law->id}}">
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
