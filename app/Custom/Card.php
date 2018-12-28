<?php

namespace App\Custom;

use \App\Product;

class Card {
    public static function getAll() {
        $product = Product::all();
        return $product;
    }
}