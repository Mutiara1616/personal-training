<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Payment;

class PaymentApproved extends Mailable
{
    public $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function build()
    {
        return $this->view('emails.payment-approved')
                    ->subject('Payment Approved - Invoice');
    }
}
