<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUsSent extends Mailable
{
    use Queueable, SerializesModels;
    
    public $form;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $form)
    {
        $this->form = $form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Email sent to tomobrien.ie')->markdown('emails.contactUsSent');
    }
}
