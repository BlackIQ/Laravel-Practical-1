@extends('layouts.app')

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
    <br>
    <br>
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-success">Complete</button>
    </form>
</div>
@endsection
