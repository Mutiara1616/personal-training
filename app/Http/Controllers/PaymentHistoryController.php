<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentHistoryController extends Controller
{
    public function index()
    {
        $payments = Payment::where('member_id', Auth::guard('member')->id())
            ->with(['katalog'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('payment.history', compact('payments'));
    }
}