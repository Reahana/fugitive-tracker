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
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@foreach($users as $user)--}}
                        <tr>
                            {{--<td>{{$loop->iteration}}</td>--}}
                            <td>1</td>
                            <td>NID</td>
                            <td>Name</td>
                            <td>Rank</td>
                            <td>Posting</td>
                            <td>Contact Number</td>
                            <td>Image</td>
                            {{--<td>{{$user->mobile}}</td>--}}
                            <td>
                                {{--<a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-success btn-sm" title="Edit">--}}
                                {{--<i class="ri-edit-box-fill"></i>--}}
                                {{--</a>--}}
                                {{--<a href="{{route('user.delete', ['id' => $user->id])}}" class="btn btn-danger btn-sm {{$user->id == 1 ? 'disabled' : ''}}" title="Delete" onclick="return confirm('Ary you sure to delete this..');">--}}
                                {{--<i class="ri-chat-delete-fill"></i>--}}
                                {{--</a>--}}
                                <a href="" class="btn btn-success btn-sm" title="Edit">
                                    <i class="ri-edit-box-fill"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm " title="Delete" onclick="return confirm('Ary you sure to delete this..');">
                                    <i class="ri-chat-delete-fill"></i>
                                </a>
                            </td>
                        </tr>
                        {{--@endforeach--}}
                        </tbody>
                    </table>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
