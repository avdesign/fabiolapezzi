<?php

namespace AVD\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateAddress extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    /**
     * @var
     */
    public $address;

    /**
     * Create a new message instance.
     *
     * @param $address
     */
    public function __construct($address)
    {
        $this->address = $address;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this
            ->subject('Alteração de Endereço')
            ->markdown('emails.users.update-address');
    }
}
