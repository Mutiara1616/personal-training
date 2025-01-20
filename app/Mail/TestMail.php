<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Test Mail',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.test',
        );
    }
}