@extends('layouts.laylout')

@section('content')
<div>
    <h1 class="text-danger">Client</h1>
    <p>For <b>{{ $pizza->name }}</b></p>
    <hr>
    <h1 class="text-danger">Pizza</h1>
    <p>Base <b>{{ $pizza->base }}</b></p>
    <p>Type <b>{{ $pizza->type }}</b></p>
    <hr>
    <h1 class="text-danger">Drink</h1>
    <ul>
        @foreach ($pizza->toppings as $drink)
            <li>{{ $drink }}</li>
        @endforeach
    </ul>
</div>
@endsection
