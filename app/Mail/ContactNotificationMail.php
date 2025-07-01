<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $messageText;

    public function __construct($name, $email, $messageText)
    {
        $this->name = $name;
        $this->email = $email;
        $this->messageText = $messageText;
    }

    public function build()
    {
        return $this->subject('New Contact Inquiry Received')
                    ->view('emails.contact-notification');
    }
}
