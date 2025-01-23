<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function download(Payment $payment)
    {
        if ($payment->status !== 'approved') {
            abort(403, 'Certificate only available for approved payments');
        }

        $filePath = storage_path("app/certificates/{$payment->id}.pdf");
        
        if (!file_exists($filePath)) {
            abort(404, 'Certificate file not found');
        }

        return response()->download(
            $filePath,
            "certificate-{$payment->katalog->judul}.pdf",
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment'
            ]
        );
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


public function show(Payment $payment) 
{
    return view('payment.certificate', compact('payment'));
}
}