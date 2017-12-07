<?php

namespace AVD\Listeners;

use AVD\Events\UserUpdateAddressEvent;
use AVD\Mail\UpdateAddress;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserUpdateAddressListener
{
    /**
     * Handle the event.
     *
     * @param  UserUpdateAddressEvent  $event
     * @return void
     */
    public function handle(UserUpdateAddressEvent $event)
    {

        $address = $event->getAddress();

        \Mail::to($address->user)->send(new UpdateAddress($address));
    }
}
