<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        return view('pizzas');
    }

    public function show($id) {
        return view('pizza', ['id' => $id]);
    }
}
