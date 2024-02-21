@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Area Form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('area.update', ['id' => $area->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Area no</label>
                            <div class="col-9">
                                <input type="number" class="form-control" value="{{$area->area_no}}" name="area_no" id="nid" placeholder="Area no"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Area Name</label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$area->name}}" name="name" id="inputEmail3" placeholder="Area Name"/>
                            </div>
                        </div>


                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-success">Update Area Info</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
