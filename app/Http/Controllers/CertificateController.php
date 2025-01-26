<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificateController extends Controller
{
    public function download(Payment $payment)
{
    $pdf = PDF::loadView('payment.certificate-pdf', [
        'payment' => $payment,
        'participants' => json_decode($payment->participants)
    ]);
    
    return $pdf->download('certificate.pdf');
}

    public function showClaimForm(Payment $payment)
    {
        if ($payment->status !== 'approved') {
            abort(403, 'Certificate only available for approved payments');
        }
        
        return view('payment.claimcertificate', compact('payment'));
    }

    public function processClaim(Request $request, Payment $payment)
    {
        if ($payment->status !== 'approved') {
            abort(403);
        }

        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'participants' => 'required|array'
        ]);

        // Process the claim and generate certificate
        
        return redirect()->route('certificate.show', $payment->id);
    }


    public function show(Request $request, Payment $payment)
    {
        // Simpan data partisipan ke dalam array
        $participants = [];
        if ($request->has('participants')) {
            $participants = json_decode($request->participants, true);
        }
        
        return view('payment.certificate', compact('payment', 'participants'));
    }
}