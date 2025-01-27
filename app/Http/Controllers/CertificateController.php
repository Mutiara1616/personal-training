<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;

class CertificateController extends Controller
{
    public function downloadAll(Payment $payment)
    {
        // Pastikan participants dalam bentuk array
        $participants = json_decode($payment->participants);
        
        if (!is_array($participants)) {
            $participants = [];
        }

        // Definisikan path absolut untuk gambar-gambar
        $data = [
            'payment' => $payment,
            'participants' => $participants,
            'logoPath' => public_path('images/logos.png'),
            'signaturePath' => public_path('images/signature.png'),
            'approvedPath' => public_path('images/approved.png')
        ];
        
        $pdf = PDF::loadView('payment.certificate-pdf', $data);
        
        return $pdf->download('certificates-' . $payment->katalog->judul . '.pdf');
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
            'participants' => 'required'
        ]);
    
        // Decode participants JSON string
        $participants = json_decode($validated['participants'], true);
    
        // Redirect ke halaman certificate dengan data participants
        return view('payment.certificate', [
            'payment' => $payment,
            'participants' => $participants
        ]);
    }

    public function show(Request $request, Payment $payment)
    {
        $participants = [];
        if ($request->has('participants')) {
            $participants = collect(json_decode($request->participants, true));
        }
        
        return view('payment.certificate', [
            'payment' => $payment,
            'participants' => $participants
        ]);
    }
}