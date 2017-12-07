<?php

namespace AVD\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'AVD\Events\UserCreatedEvent' => [
            'AVD\Listeners\UserSendMailCreatedListener',
        ],
        'AVD\Events\UserAddressCreatedEvent' => [
            'AVD\Listeners\UserAddressCreatedListener',
        ],
        'AVD\Events\UserNoteCreatedEvent' => [
            'AVD\Listeners\UserNoteCreatedListener',
        ],
        'AVD\Events\UserRegisterConfirmedEvent' => [
            'AVD\Listeners\UserRegisterConfirmedListener',
        ],
        'AVD\Events\UserUpdateProfileEvent' => [
            'AVD\Listeners\UserUpdateProfileListener',
        ],
        'AVD\Events\UserUpdateAddressEvent' => [
            'AVD\Listeners\UserUpdateAddressListener',
        ],
        'AVD\Events\ContactCreatedEvent' => [
            'AVD\Listeners\ContatoCreatedListener',
        ],
        'AVD\Events\NewsletterCreatedEvent' => [
            'AVD\Listeners\NewsletterCreatedListener',
        ],

    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        'AVD\Listeners\UserEventSubscriber',
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
