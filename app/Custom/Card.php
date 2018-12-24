<?php

namespace App\Custom;

use \App\Product;

class Card {
    public static function get() {
        $product = Product::all();
        return $product;
    }
}