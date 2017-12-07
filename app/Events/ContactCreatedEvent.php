<?php

namespace AVD\Events;



class ContactCreatedEvent
{
    private $contact;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        //
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }


}
