@extends('front.master')
@section('title')
    Check Status |
@endsection
@section('body')
    <section class="container-fluid check-status p-5">
        {{--<div class="d-grid">--}}
            <a class="btn btn-primary btn-lg " href={{route('check-status')}}><i class="fa-solid fa-arrow-left"></i> Back to Search</a>
        {{--</div>--}}

        @if($cases->isNotEmpty())
        @foreach ($nids as $nid)
            <div class=" m-4">
                <h4>Name: {{$nid->name}}</h4>
                <h5>NID: {{$nid->nid}} </h5>
            </div>

        @endforeach

            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead class="text-center fs-5">
                <tr>
                    <th>SL No</th>
                    <th>Case Clause</th>
                    <th>Case Title</th>
                    <th>How to solve</th>
                    <th>Apply</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($cases as $case)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$case->clause}}</td>
                        <td>{{$case->title}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>





        @else
            @if($nids->isEmpty())
                <h1 class="text-danger text-center m-5">NID not found</h1>
            @else
            @foreach ($nids as $nid)
                <div class=" m-4">
                    <h4>Name: {{$nid->name}}</h4>
                    <h5>NID: {{$nid->nid}} </h5>
                </div>

            @endforeach

            <div class="m-5">
                <h2> <span class="text-success">Congratulations!</span> You dont have any case </h2>
            </div>

            @endif
        @endif

    </section>




@endsection