<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class Index extends Controller
{
    public function render() {
        $products = Product::all();
        return view('index', [
            'products' => $products,
            'title' => 'Главная'
        ]);
    }
}
