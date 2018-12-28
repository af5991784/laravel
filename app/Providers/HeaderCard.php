<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use \App\Custom\Card;

class HeaderCard extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */

    protected $defer = true;

    public function boot()
    {   

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
