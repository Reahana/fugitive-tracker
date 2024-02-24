@extends('front.master')
@section('title')
    Law Lists |
@endsection

@section('body')
    <section class="container-fluid law-list p-5">
        <h2 class="mb-3 ">List of law</h2>

        <table class="table table-primary  table-striped">
            <thead class="text-center">
            <tr>
                <th scope="col">Sl no.</th>
                <th scope="col">Clause</th>
                <th scope="col">Title</th>
                {{--<th scope="col">Handle</th>--}}
            </tr>
            </thead>
            <tbody class="text-center">
            @foreach($laws as $law)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$law->clause}}</td>
                <td>{{$law->law}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

    </section>
    @endsection