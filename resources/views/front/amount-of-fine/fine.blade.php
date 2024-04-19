@extends('front.master')
@section('title')
    Amount of fine |
    @endsection
@section('body')
    <section class="container-fluid fine-page p-5">
        <h1 class="mb-3 text-center ">Amount of  fines</h1>
        <table class="table   table-striped">
            <thead class="text-center fs-4">
            <tr>
                <th scope="col">Sl no.</th>
                <th scope="col">Clause</th>
                <th scope="col">Title</th>
                <th scope="col">Fine</th>
            </tr>
            </thead>
            <tbody class="text-center fs-4 ">
            @foreach($laws as $law)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$law->clause}}</td>
                    <td>{{$law->title}}</td>
                    <td>{{$law->fine}} Taka</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </section>
@endsection