<?php

namespace AVD\Listeners;

use AVD\Events\UserNoteCreatedEvent;
use AVD\Interfaces\UserNoteInterface;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserNoteCreatedListener implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * @var UserNoteInterface
     */
    private $userNote;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(UserNoteInterface $userNote)
    {
        //
        $this->userNote = $userNote;
    }

    /**
     * Handle the event.
     *
     * @param  UserCreatedEvent  $event
     * @return void
     */
    public function handle(UserNoteCreatedEvent $event)
    {
        $note = $event->getNote();
        $this->userNote->create($note);
    }
}
