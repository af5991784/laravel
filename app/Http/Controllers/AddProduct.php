<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class AddProduct extends Controller
{
    public function add(Request $request) {
        $params_query = $request->query();
        Product::create([
            'name' =>  $params_query['name'],
            'photo' =>  $params_query['photo'],
            'description' =>  $params_query['description'],
            'price' =>  $params_query['price'],
            'price_sale' =>  $params_query['price_sale'],
        ]);
    }
}
