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
            $pictures = $admin->pictures;

            $view->with([
                "admin" => $admin,
                "picture" => $pictures[0],
                "picture_sm" => $pictures[1],
                "picture_lg" => $pictures[2]
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
