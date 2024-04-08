@extends('front.master')
@section('body')

       <section class="container-fluid show p-5">
               <h1 class="text-center">{{$article->title}}</h1>
               <h4 class="text-center pb-3" >By {{$article->author_name}}</h4>
               <img src="{{asset($article->image) }}"  class="mx-auto d-block pb-5" alt="...">
               <p class="fs-5">{{$article->body}}</p>
       </section>

@endsection