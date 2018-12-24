<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class Card extends Controller
{
    public function add(Request $request) {
        $product = Product::findOrFail($request->id);
        $request->session()->put("cart.{$product->id}", [
            'id' => $product->id,
            'img' => $product->photo,
            'name' => $product->name
        ]);

        dump($request->session());
        echo 'fddssddsdsdsd';
    }
}
