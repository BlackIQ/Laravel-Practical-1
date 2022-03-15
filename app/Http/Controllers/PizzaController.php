<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')-> get();
        // $pizzas = Pizza::where('type', 'Normal')->get();
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id) {
        return view('pizzas.show', ['id' => $id]);
    }

    public function create() {
        return view('pizzas.create');
    }
}
