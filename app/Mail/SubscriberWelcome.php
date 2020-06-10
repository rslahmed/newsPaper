<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriberWelcome extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.subscriber_welcome')
            ->subject('Thank you for subscribe');
    }
}
