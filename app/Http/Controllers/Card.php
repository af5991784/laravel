<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use Illuminate\Support\Facades\Session;

class Card extends Controller
{
    public function add(Request $request) {
        $product = Product::findOrFail($request->id);
        $request->session()->put("card.{$product->id}", [
            'id' => $product->id,
            'img' => $product->photo,
            'name' => $product->name,
            'description' => $product->description,
            'price' => $product->price
        ]);
        dump(Session::get('card'));
    }

    public function remove(Request $request) {
        Session::forget("card.{$request->id}");
    }

    public function page() {
        return view('card', [
            'products' => Session::get('card'),
            'title' => 'Корзина'
        ]);
    }
}
