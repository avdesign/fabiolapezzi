<?php

namespace AVD\Events;


class NewsletterCreatedEvent
{
    private $newsletter;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($newsletter)
    {

        $this->newsletter = $newsletter;
    }

    /**
     * @return mixed
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }




}
