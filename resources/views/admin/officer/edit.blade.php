@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit NID Form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">ID No</label>
                            <div class="col-9">
                                <input type="email" class="form-control" name="number" id="id" placeholder="ID No"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Name</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Rank</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="rank" id="inputEmail33" placeholder="Rank"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Posting</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="posting" id="inputEmail33" placeholder="Posting"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Contact Number</label>
                            <div class="col-9">
                                <input type="email" class="form-control" name="number" id="id" placeholder="Contact Number"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label"> Image</label>
                            <div class="col-9">
                                <input type="file" class="form-control" name="image" id="inputEmail34" placeholder="User Image"/>
                            </div>
                        </div>



                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-success">Update Officer Info</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
