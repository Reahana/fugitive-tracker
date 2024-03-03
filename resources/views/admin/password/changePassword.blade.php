@extends('admin.master')
@section('title')
    Change Password
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Change Password Form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('new.password')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Old Password: </label>
                            <div class="col-9">
                                <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old Password "/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">New Password:</label>
                            <div class="col-9">
                                <input type="password" class="form-control" name="password" id="password" placeholder=" New Password"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Confirm Password:</label>
                            <div class="col-9">
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder=" Confirm Password"/>
                            </div>
                        </div>


                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info btn-block">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>

@endsection

