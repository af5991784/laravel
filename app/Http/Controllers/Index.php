<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\Custom\Card;

class Index extends Controller
{
    public function render() {
        $products = Product::all();
        $faker = \Faker\Factory::create();
        echo $faker->address;
        return view('index', [
            'products' => $products,
            'title' => 'Главная',
            'products_card' => Card::get()
        ]);
    }
}
