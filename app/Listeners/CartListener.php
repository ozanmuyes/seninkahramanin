<?php

namespace App\Listeners;

class CartListener
{
    /**
     * Handle user login events.
     */
    public function onUserLogin($event) {}

    /**
     * Handle user logout events.
     */
    public function onUserLogout($event) {}

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     * @return array
     */
    public function subscribe($events)
    {
        $events->listen(
            "App\Events\UserLoggedIn",
            "App\Listeners\UserEventListener@onUserLogin"
        );

        $events->listen(
            "App\Events\UserLoggedOut",
            "App\Listeners\UserEventListener@onUserLogout"
        );
    }
}
