<?php

namespace AVD\Listeners;

use AVD\Mail\NewsletterCreated;
use AVD\Events\NewsletterCreatedEvent;
use AVD\Interfaces\NewsletterInterface;


class NewsletterCreatedListener
{
    /**
     * @var NewsletterInterface
     */
    private $newsletter;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(NewsletterInterface $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    /**
     * Handle the event.
     *
     * @param  NewsletterCreatedEvent  $event
     * @return void
     */
    public function handle(NewsletterCreatedEvent $event)
    {
        $input   = $event->getNewsletter();
        $created = false;

        if (isset($input['contact'])) {

            $exist = $this->newsletter->setEmail($input['email']);
            if ($exist) {
                if ($exist->confirmed == 0) {
                    $input['url'] = url('/newsletter/'.$exist->email.'/'.$exist->token);
                    \Mail::to($input['email'])->send(new NewsletterCreated($input));
                }
            } else {
                $created = $this->newsletter->create($input);
            }
        } else {
            $created = $this->newsletter->create($input);
        }

        if ($created) {
            $input['url'] = url('/newsletter/'.$created->email.'/'.$created->token);
            \Mail::to($created->email)->send(new NewsletterCreated($input));
        }
    }
}
