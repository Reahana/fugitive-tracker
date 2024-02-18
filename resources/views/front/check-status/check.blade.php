@extends('front.master')
@section('title')
    Check Status |
    @endsection
@section('body')
    <section class="container-fluid check-status p-5">
        <h2 class="mb-3 ">To know your case status please enter your NID number in the search box and search</h2>
        <form class="w-50 mx-auto " role="search">
            <div class="mb-3 mt-2">
                <input type="search" placeholder="NID number" class="form-control form-control-lg" id="exampleInputPassword1">
            </div>
            <div >
                <div class="d-grid">
                    <button class="btn btn-outline-success btn-lg " type="submit">Search</button>

                </div>
            </div>

        </form>
    </section>
    @endsection