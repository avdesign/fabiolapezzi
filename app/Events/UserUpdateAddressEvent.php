<?php

namespace AVD\Events;


class UserUpdateAddressEvent
{
    private $address;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($address)
    {
        //
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }



}
