@extends('front.master')
@section('title')
    Law Lists |
@endsection

@section('body')
    <section class="container-fluid law-list p-5">
        <h1 class="mb-3 text-center text-white">List of Laws</h1>

        <table class="table   table-striped">
            <thead class="text-center fs-4">
            <tr>
                <th scope="col">Sl no.</th>
                <th scope="col">Clause</th>
                <th scope="col">Title</th>
                {{--<th scope="col">Handle</th>--}}
            </tr>
            </thead>
            <tbody class="text-center fs-4 ">
            @foreach($laws as $law)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$law->clause}}</td>
                <td>{{$law->title}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

    </section>
    @endsection