<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Notification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $ticket_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$ticket_id)
    {
        $this->user = $user;
        $this->ticket_id = $ticket_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.notify');
    }
}
