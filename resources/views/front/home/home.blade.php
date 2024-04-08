@extends('front.master')
@section('body')
<!-- banner -->
<header class="bannar container-fluid">

</header>


<!-- goto -->

<section class="container-fluid goto py-3">
    <h1 class="title "> <i class="fa-solid fa-angles-left"></i> Go To <i class="fa-solid fa-angles-right"></i> </h1>
    <div class=" row g-4">
        <div class="col-md-6 d-grid ">
            <a href="{{route('law-list')}}" class=" btn btn-secondary btn-lg py-3 "  data-toggle="tooltip" data-placement="bottom" title="list of law">
                Law List <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-md-6 d-grid ">
            <a href="{{route('amount-of-fine')}}" class="btn btn-danger btn-lg py-3" data-toggle="tooltip" data-placement="bottom" title="Amount of fine">
                Amount of Fine <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>
        <div class="col-md-6 d-grid">
            <a href="{{route('how-to-solve')}}" class="btn btn-success btn-lg py-3" data-toggle="tooltip" data-placement="bottom" title="See how can you solve your case">
                How to Solve  <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-md-6 d-grid">
            <a href="{{route('check-status')}}" class="btn btn-primary btn-lg py-3"  data-toggle="tooltip" data-placement="bottom" title="Check the status if you have any cases or not">
                Check My Status <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>

<!--Articles -->
<section class="article container-fluid py-3 ">
    <h2 class="title mb-3 ">Articles <i class="fa-regular fa-newspaper"></i></h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 section1 pb-3">
        @foreach($articles as $article)
            <div class="col">
                <div class="card text-bg-light">
                    <img src="{{$article->image}}" class="card-img" height="300" alt="...">
                    <div class="card-img-overlay">
                        <br><br><br>
                        <h3 class="card-title text-white bg-danger"><a href="">{{$article->title}}</a></h3>

                    </div>
                </div>
            </div>
            @endforeach
        {{--<div class="col">--}}
            {{--<div class="card text-bg-light">--}}
                {{--<img src="./image/law.jpg" class="card-img" style="opacity: 0.5" alt="...">--}}
                {{--<div class="card-img-overlay">--}}
                    {{--<h5 class="card-title ">Card title</h5>--}}
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                    {{--<p class="card-text"><small>Last updated 3 mins ago</small></p>--}}
                    {{--<button>Read more..</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col">--}}
            {{--<div class="card text-bg-light">--}}
                {{--<img src="./image/law.jpg" class="card-img" style="opacity: 0.5" alt="...">--}}
                {{--<div class="card-img-overlay">--}}
                    {{--<h5 class="card-title ">Card title</h5>--}}
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                    {{--<p class="card-text"><small>Last updated 3 mins ago</small></p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col">--}}
            {{--<div class="card text-bg-light">--}}
                {{--<img src="./image/law.jpg" class="card-img" style="opacity: 0.5" alt="...">--}}
                {{--<div class="card-img-overlay">--}}
                    {{--<h5 class="card-title ">Card title</h5>--}}
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                    {{--<p class="card-text"><small>Last updated 3 mins ago</small></p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>


    {{--<div class="d-flex  justify-content-center mt-3 ">--}}
        {{--<button class="btn btn-outline-light btn-lg"> Read all blogs </button>--}}
    {{--</div>--}}

</section>
    @endsection