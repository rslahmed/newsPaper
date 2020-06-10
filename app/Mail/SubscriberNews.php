<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriberNews extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mailData;
    public function __construct($mailData)
    {
        return $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.subscriber_news',[
            'mailData' => $this->mailData
        ])
            ->subject($this->mailData->subject);
    }
}
