@extends('layouts.laylout')

@section('content')
<div>
    <h1>Client</h1>
    <p>For <b>{{ $pizza->name }}</b></p>
    <hr>
    <h1>Pizza</h1>
    <p>Base {{ $pizza->base }}</p>
    <p>Type {{ $pizza->type }}</p>
</div>
@endsection
