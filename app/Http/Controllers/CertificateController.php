<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class CertificateController extends Controller
{
    public function downloadAll(Payment $payment, Request $request)
{
    if ($payment->status !== 'approved') {
        abort(403, 'Certificate only available for approved payments');
    }

    $mpdf = new Mpdf([
        'mode' => 'utf-8',
        'format' => [210, 297],
        'orientation' => 'L',
        'margin_left' => 0,
        'margin_right' => 0,
        'margin_top' => 0,
        'margin_bottom' => 0,
        'tempDir' => storage_path('temp')
    ]);

    // Ambil data participants dari request
    $participants = [];
    if ($request->has('participants')) {
        $participants = json_decode($request->participants, true);
    }

    if (empty($participants)) {
        abort(404, 'No participants found');
    }

    // Render sertifikat untuk setiap participant
    foreach ($participants as $index => $participant) {
        $html = view('payment.certificate-pdf', [
            'payment' => $payment,
            'participant' => $participant,
            'logoPath' => public_path('images/logo.png'),
            'signaturePath' => public_path('images/signature.png')
        ])->render();
        
        $mpdf->WriteHTML($html);
        
        // Tambah halaman baru jika bukan participant terakhir
        if ($index !== array_key_last($participants)) {
            $mpdf->AddPage();
        }
    }

    return $mpdf->Output('certificates.pdf', 'D');
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