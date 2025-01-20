<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Katalog;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index($katalog_id)
    {
        $katalog = Katalog::findOrFail($katalog_id);
        return view('payment.payment', compact('katalog'));
    }
    public function store(Request $request)
{
    if (!Auth::guard('member')->check()) {
        return redirect()->route('login');
    }

    $validated = $request->validate([
        'katalog_id' => 'required|exists:katalogs,id',
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'participants' => 'required|integer|min:1',
        'amount' => 'required|numeric',
        'payment_method' => 'required|string',
        'bank_name' => 'required|string',
        'bukti_transfer' => 'required|image|max:2048'
    ]);

    $buktiTransferPath = $request->file('bukti_transfer')->store('bukti-transfer', 'public');

    $payment = Payment::create([
        'member_id' => Auth::guard('member')->id(), // Menggunakan guard member
        'katalog_id' => $validated['katalog_id'],
        'amount' => $validated['amount'],
        'payment_method' => $validated['payment_method'],
        'bank_name' => $validated['bank_name'],
        'participants' => $validated['participants'],
        'bukti_transfer' => $buktiTransferPath,
        'status' => 'pending'
    ]);

    return redirect()->route('payment.success')->with('success', 'Payment submitted successfully!');
}
}