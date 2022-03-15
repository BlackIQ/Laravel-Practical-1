@extends('layouts.laylout')

@section('content')
<div class="">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Base</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza)
                <tr>
                    <td>{{ $pizza->name }}</td>
                    <td>{{ $pizza->type }}</td>
                    <td>{{ $pizza->base }}</td>
                    <td>{{ $pizza->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
