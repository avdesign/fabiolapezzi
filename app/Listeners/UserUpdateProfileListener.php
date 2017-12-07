<?php

namespace AVD\Listeners;

use AVD\Events\UserUpdateProfileEvent;
use AVD\Mail\UpdateProfile;

class UserUpdateProfileListener
{
    /**
     * Handle the event.
     *
     * @param  UserUpdateProfileEvent  $event
     * @return void
     */
    public function handle(UserUpdateProfileEvent $event)
    {
        $user = $event->getUser();

        \Mail::to($user['email'])->send(new UpdateProfile($user));
    }
}
