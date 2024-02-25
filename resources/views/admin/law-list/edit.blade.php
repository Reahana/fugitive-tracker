@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Law Form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('law.update', ['id' => $law->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Law ID</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="l_id" value="{{$law->l_id}}" id="l_id" placeholder="Law ID"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Clause no</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="clause" value="{{$law->clause}}" id="clause" placeholder=" Clause"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Title</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="title" value="{{$law->title}}" id="title" placeholder="Title"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Fine Amount</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="fine" value="{{$law->fine}}" id="fine" placeholder="Fine Amount"/>
                            </div>
                        </div>


                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-success">Edit Law</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
