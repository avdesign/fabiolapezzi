<?php

namespace AVD\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewsletterCreated extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    /**
     * @var
     */
    public $created;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($created)
    {
        //
        $this->created = $created;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Confirme seu email para receber informações da '.config('app.name'))
            ->markdown('emails.newsletters.created');
    }
}
