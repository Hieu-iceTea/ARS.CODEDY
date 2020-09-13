<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //Paginator::useBootstrap(); //The paginator now uses the Tailwind CSS framework for its default styling. In order to keep using Bootstrap, you should add the following method call to the boot method of your application's AppServiceProvider:
    }
}
