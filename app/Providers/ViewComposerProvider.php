<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('user.markup.header', 'App\Http\Controllers\HomeController@categories');

        view()->composer('user.markup.categoriesName', 'App\Http\Controllers\HomeController@categoriesName');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
