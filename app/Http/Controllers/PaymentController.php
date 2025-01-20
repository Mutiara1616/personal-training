<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'katalog_id' => 'required',
            'amount' => 'required',
            'payment_method' => 'required', 
            'bukti_transfer' => 'required|image'
        ]);

        $payment = Payment::create([
            'member_id' => Auth::id(),  // Gunakan Auth facade
            'katalog_id' => $validated['katalog_id'],
            'amount' => $validated['amount'],
            'payment_method' => $validated['payment_method'],
            'bukti_transfer' => $request->file('bukti_transfer')->store('bukti-transfer', 'public'),
            'status' => 'pending'
        ]);

        return redirect()->route('payment.success');
    }
}
