<x-mail::message>
# Payment Approved

Dear {{ $payment->member->name }},

Your payment for {{ $payment->katalog->judul }} has been approved.

Amount: Rp {{ number_format($payment->amount, 2) }}

Thank you for your purchase!

Best regards,
{{ config('app.name') }}
</x-mail::message>