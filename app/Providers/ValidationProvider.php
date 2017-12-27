<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidationProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('csv_validation', function ($attribute, $value){


            if($value -> extension() == 'txt' || $value -> extension() == 'csv' || $value -> extension() == 'xlsx' ||
                $value -> extension() == 'zip' || $value -> extension() == 'bin')
                return  true;
            else return false;

        },'Only csv or xlsx file');
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
