<?php
/**
 * Created by PhpStorm.
 * User: avdesign
 * Date: 03/11/17
 * Time: 00:09
 */

namespace AVD\Listeners;

use Illuminate\Support\Facades\Auth;


class UserEventSubscriber
{
    /**
     * Handle user login events.
     */
    public function onUserLogin($event)
    {
        $user = Auth::user();
        $user->last_login = date('Y-m-d H:i:s');
        $user->visits     = $user->visits+1;
        $user->ip         = request()->ip();
        $user->save();
    }

    /**
     * Handle user logout events.
     */
    public function onUserLogout($event)
    {
        $user = Auth::user();
        $user->logout = date('Y-m-d H:i:s');
        $user->save();
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Login',
            'AVD\Listeners\UserEventSubscriber@onUserLogin'
        );

        $events->listen(
            'Illuminate\Auth\Events\Logout',
            'AVD\Listeners\UserEventSubscriber@onUserLogout'
        );
    }
}