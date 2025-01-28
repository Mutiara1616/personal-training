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

        // Cek kuota sebelum menampilkan halaman payment
        if ($katalog->registered_participants >= $katalog->quota) {
            return redirect()->back()->with('error', 'Maaf, kuota pelatihan sudah penuh.');
        }

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
            'bank_name' => 'required|string',
            'bukti_transfer' => 'required|image|max:2048'
        ]);

        $buktiTransferPath = $request->file('bukti_transfer')->store('bukti-transfer', 'public');

        $katalog = Katalog::find($request->katalog_id);

        // Cek apakah jumlah peserta yang didaftarkan melebihi sisa kuota
        $sisa_kuota = $katalog->quota - $katalog->registered_participants;
        if ($request->participants > $sisa_kuota) {
            return back()->withErrors([
                'participants' => "Jumlah peserta melebihi sisa kuota. Sisa kuota: {$sisa_kuota} orang."
            ])->withInput();
        }

        $buktiTransferPath = $request->file('bukti_transfer')->store('bukti-transfer', 'public');

        $baseAmount = $katalog->harga;
        $subtotal = $baseAmount * $request->participants;
        $tax = $subtotal * 0.1;
        $totalAmount = $subtotal + $tax;

        $payment = Payment::create([
            'member_id' => Auth::guard('member')->id(),
            'katalog_id' => $request->katalog_id,
            'amount' => $totalAmount,
            'payment_method' => 'bank_transfer',
            'bank_name' => $request->bank_name,
            'participants' => $request->participants,
            'bukti_transfer' => $request->file('bukti_transfer')->store('bukti-transfer', 'public'),
            'status' => 'pending'
        ]);

        // Update jumlah peserta terdaftar
        $katalog->increment('registered_participants', $request->participants);

        // Set session data dengan nilai yang benar
        session()->put('payment_details', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'participants' => $request->participants,
            'training_package' => $katalog->judul,
            'training_date' => $katalog->tanggal_mulai->format('d/m/Y') . ' - ' . $katalog->tanggal_selesai->format('d/m/Y'),
        ]);
        
        session()->put('payment_data', [
            'balance_amount' => $subtotal,
            'tax_amount' => $tax, 
            'total_amount' => $totalAmount
        ]);

        return redirect()->route('payment.success');
        
        }
}