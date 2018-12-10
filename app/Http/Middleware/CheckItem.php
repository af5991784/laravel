<?php

namespace App\Http\Middleware;

use Closure;
use App\Product;

class CheckItem
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $product = Product::findOrFail($request->route()->parameters()['item']);
        return $next($request);
    }
}
