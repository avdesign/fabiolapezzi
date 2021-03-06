<?php

namespace AVD\Listeners;

use AVD\Events\UserAddressCreatedEvent;
use AVD\Interfaces\UserAddressInterface;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserAddressCreatedListener implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * @var UserAddressInterface
     */
    private $userAddress;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(UserAddressInterface $userAddress)
    {
        $this->userAddress = $userAddress;
    }

    /**
     * Handle the event.
     *
     * @param  UserAddressCreatedEvent  $event
     * @return void
     */
    public function handle(UserAddressCreatedEvent $event)
    {
        $address = $event->getAddress();
        $this->userAddress->create($address);

    }
}
