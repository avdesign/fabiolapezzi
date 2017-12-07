<?php

namespace AVD\Listeners;

use AVD\Events\ContactCreatedEvent;
use AVD\Mail\ContactCreated;
use Illuminate\Support\Facades\Auth;

class ContatoCreatedListener
{
    /**
     * Handle the event.
     *
     * @param  ContactCreatedEvent  $event
     * @return void
     */
    public function handle(ContactCreatedEvent $event)
    {

        $contact = $event->getContact();

        if (Auth::check()) {
            if ($contact->configSubject->status == 1 && $contact->configSubject->send_user == 1) {
                \Mail::to($contact->email)->send(new ContactCreated($contact));
            }
        } else {
            if ($contact->configSubject->status == 1 && $contact->configSubject->send_guest == 1) {
                \Mail::to($contact->email)->send(new ContactCreated($contact));
            }
        }

    }
}
