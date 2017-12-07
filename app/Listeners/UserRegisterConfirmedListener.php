<?php

namespace AVD\Listeners;

use AVD\Events\UserRegisterConfirmedEvent;
use AVD\Mail\RegisterConfirmed;

class UserRegisterConfirmedListener
{

    /**
     * Handle the event.
     *
     * @param  UserRegisterConfirmedEvent  $event
     * @return void
     */
    public function handle(UserRegisterConfirmedEvent $event)
    {
        $user = $event->getUser();
        \Mail::to($user)->send(new RegisterConfirmed($user));
    }
}
