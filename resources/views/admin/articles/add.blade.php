@extends('admin.master')
@section('title')
    Add Article |
@endsection
@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Article form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('area.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Article No</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="article_no" id="article_no" placeholder="Article no"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Author Name</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="author_name" id="author_name" placeholder=" Author"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Article Title</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="title" id="title" placeholder=" Title"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Article Body</label>
                            <div class="col-9">
                                <textarea name="body" placeholder=" Body" id="" cols="95" rows="5"></textarea>
                            </div>
                        </div>




                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Add New Article</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
