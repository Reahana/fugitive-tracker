@extends('front.master')
@section('title')
    Check Status |
@endsection
@section('body')
    <section class="container-fluid check-status p-5">

        <a class="btn btn-success btn-lg mb-3" href={{route('check-status')}}><i class="fa-solid fa-arrow-left"></i> Back</a>
        @if($cases->isNotEmpty())
           @foreach($cases as $case)

                
                    @endforeach






        @else
            <div>
                <h2>You dont have any case </h2>
            </div>
        @endif

    </section>




@endsection