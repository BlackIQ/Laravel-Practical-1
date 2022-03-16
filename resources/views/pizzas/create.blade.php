@extends('layouts.app')

@section('content')
<div class="p-5">
    <h1 class="text-danger">Order a pizza</h1>
    <hr>
    <div class="col-md-4">
        <form method="POST" action="/pizzas">
            @csrf
            <label for="name" class="form-label">Name</label>
            <input id="name" class="form-control" placeholder="Name" name="name">
            <br>
            <label for="base" class="form-label">Base</label>
            <select id="base" class="form-select" name="base">
                <option value="Bread">Bread</option>
            </select>
            <br>
            <label for="type" class="form-label">Type</label>
            <select id="type" class="form-select" name="type">
                <option value="Vegen">Vegen</option>
                <option value="Vegen">Peperoni</option>
                <option value="Vegen">Normal</option>
            </select>
            <br>
            <fieldset>
                <label>Drink</label>
                <br>
                <input class="form-check-input" name="toppings[]" type="checkbox" value="CocaCola" id="coca"><label for="coca">CocaCola</label><br>
                <input class="form-check-input" name="toppings[]" type="checkbox" value="Pepsi" id="pepsi"><label for="pepsi">Pepsi</label><br>
                <input class="form-check-input" name="toppings[]" type="checkbox" value="7Up" id="7up"><label for="7up">7Up</label><br>
            </fieldset>
            <br>
            <button class="btn btn-danger" type="submit" value="order">Create epizza</button>
            <br>
            <br>
            <p>{{ session('msg') }}</p>
        </form>
    </div>
</div>
@endsection
