@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit NID Form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('nid.update', ['id' => $citizen->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">NID Number</label>
                            <div class="col-9">
                                <input type="number" class="form-control" value="{{$citizen->nid}}" name="nid" id="nid" placeholder="National Identification Number"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Name</label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$citizen->name}}" name="name" id="inputEmail3" placeholder="Name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Date of Birth</label>
                            <div class="col-9">
                                <input type="date" class="form-control" value="{{$citizen->dob}}" name="dob" id="inputEmail33" placeholder="Date of Birth"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label"> Image</label>
                            <div class="col-9">
                                <input type="file" class="form-control" name="image" id="inputEmail34" placeholder=" Image"/>
                                <img src="{{asset($citizen->image)}}" alt="" height="100" width="120"/>
                            </div>
                        </div>



                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-success">Update NID Info</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
