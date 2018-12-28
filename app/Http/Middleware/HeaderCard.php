<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class HeaderCard
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
        View::composer(['base', 'card'], function ($view) {
            $card_list = Session::get('card');
            $view->with('header_card_elements', collect($card_list));
        });
        return $next($request);
    }
}
