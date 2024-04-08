@extends('admin.master')
@section('title')
    Manage Citizen NID |
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">All Article Information</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th >Body</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->author_name}}</td>
                                <td>
                                    <textarea name="" id="" cols="30" rows="10">{{$article->body}}</textarea>
                                </td>
                                <td >{{$article->image}}</td>
                                <td>
                                    <a href="{{route('edit-article', ['id' => $article->id])}}" class="btn btn-success btn-sm" title="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm " onclick="event.preventDefault(); document.getElementById('articleDeleteForm{{$article->id}}').submit();" title="Delete" >
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                    <form action="{{route('article.delete', ['id' => $article->id])}}" method="POST" id="articleDeleteForm{{$article->id}}">
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
