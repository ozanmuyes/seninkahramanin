<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Auth;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("layouts.admin.default", function ($view) {
            $admin = Auth::user();

            $view->with([
                "admin" => $admin,
                "picture" => $admin->pictures[0]
            ]);
        });
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
