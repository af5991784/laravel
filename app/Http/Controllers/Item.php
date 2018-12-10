<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class Item extends Controller
{
    public function identificate($item) {
        $product = Product::find($item);
        return view('item', [
            'product' => $product,
            'title' => $product->name
        ]);
    }
 }
