<?php

namespace AVD\Listeners;

use AVD\Events\UserCreatedEvent;
use AVD\Mail\UserCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserSendMailCreatedListener implements ShouldQueue
{

    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param  UserCreatedEvent  $event
     * @return void
     */
    public function handle(UserCreatedEvent $event)
    {
        $user = $event->getUser();
        \Mail::to($user)->send(new UserCreated($user));
    }
}
