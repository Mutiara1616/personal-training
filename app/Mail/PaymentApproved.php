<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Payment;

class PaymentApproved extends Mailable
{
    use Queueable, SerializesModels;

    public $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Payment Approved - Invoice',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.payment-approved',
        );
    }
}