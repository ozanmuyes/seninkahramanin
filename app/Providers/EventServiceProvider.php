<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // // 'App\Events\SomeEvent' => [
        // //     'App\Listeners\EventListener',
        // // ],
        // "Ozanmuyes\Cart\Events\CartCreated" => [
        //     "App\Listeners\CartCreatedListener",
        // ],
        // "Ozanmuyes\Cart\Events\ItemsAdded" => [
        //     "App\Listeners\ItemsAddedListener",
        // ],
    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    // protected $subscribe = [
    //     "App\Listeners\CartListener",
    // ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
