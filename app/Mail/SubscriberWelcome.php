<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriberWelcome extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    public $unID;
    public function __construct($unID,$token)
    {
        $this->token = $token;
        $this->unID = $unID;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.subscriber_welcome',[
            'token' => $this->token,
            'unID' => $this->unID,
        ])
            ->subject('Thank you for subscribe');
    }
}
