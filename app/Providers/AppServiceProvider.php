<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Carbon\Carbon;
use Slugify;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale("tr");

        Slugify::addRule("ç", "c");
        Slugify::addRule("ğ", "g");
        Slugify::addRule("ı", "i");
        Slugify::addRule("ö", "o");
        Slugify::addRule("ş", "s");
        Slugify::addRule("ü", "u");
        Slugify::addRule("Ç", "c");
        Slugify::addRule("Ğ", "g");
        Slugify::addRule("İ", "i");
        Slugify::addRule("Ö", "o");
        Slugify::addRule("Ş", "s");
        Slugify::addRule("Ü", "u");
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
