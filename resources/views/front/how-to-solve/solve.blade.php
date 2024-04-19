@extends('front.master')
@section('title')
    How to solve |
@endsection
@section('body')
    <section class="container-fluid solve-page p-5">

        <h1 class="mb-3 text-center bg-white">How To Solve</h1>
        <p class="fs-4 mx-4">To dismiss your case you have to pay fine or get the penalty according to rules if you are not willing to pay .You can look at the fine list available on our site and contact to the list provided below. </p>
        <p class="fs-4 mx-4 mb-5">If you have any objection about the case or fine you can also complain there about the case and get the justice. Thank you for your cooperation.</p>
        <table class="table  table-bordered border-secondary">
            <thead class="text-center fs-4">
            <tr class="table-dark">
                <th class="text-center" scope="col">Sl no.</th>
                <th scope="col">Clause</th>
                <th scope="col">Contact</th>
                <th scope="col">Authorize person</th>
                <th scope="col">Address</th>
            </tr>
            </thead>
            <tbody class="text-center fs-4 ">
            @foreach($laws as $law)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$law->clause}}</td>
                    @switch ($law->clause)
                        @case ("137*")
                        @case ("142*")
                        @case ("148*")
                        @case ("149*")
                        @case ("152*")
                        @case ("154*")
                            <td>567 </td>
                            <td>MR.ABC</td>
                        @break;
                        @default
                            <td>568</td>
                            <td>MR.XYZ</td>
                    @endswitch
                    <td>Nearby police box </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </section>
@endsection