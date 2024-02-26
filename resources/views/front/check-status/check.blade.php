@extends('front.master')
@section('title')
    Check Status |
    @endsection
@section('body')
    <section class="container-fluid check-status p-5">
        <h2 class="mb-3 mt-2">To know your case status please enter your NID number in the search box and search</h2>
        <form class="w-50 mx-auto " action="{{route('search')}}" role="search" method="get">
            <div class="mb-3 mt-2">
                <input type="number" placeholder="NID number" class="form-control form-control-lg" name="search" id="search">
            </div>
            <div >
                <div class="d-grid">
                    <button class="btn btn-success btn-lg " type="submit">Search</button>

                </div>
            </div>

        </form>



    </section>




    @endsection