<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FeedbackController extends Controller
{
    public function create()
    {
        $hasApprovedPayment = Auth::guard('member')->user()
            ->payments()
            ->where('status', 'approved')
            ->exists();

        if (!$hasApprovedPayment) {
            return redirect()->route('payment.history')
                ->with('error', 'You can only give feedback after your payment is approved.');
        }

        $hasGivenFeedback = Auth::guard('member')->user()
            ->feedbacks()
            ->where('type', 'training')
            ->exists();

        if ($hasGivenFeedback) {
            return redirect()->route('payment.history')
                ->with('error', 'Anda sudah memberikan feedback sebelumnya.');
        }

        return view('feedback.feedback');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',  
            'message' => 'required|string'
        ]);
        
        $feedback = Feedback::create([
            'member_id' => Auth::guard('member')->id(),
            'rating' => $validated['rating'],
            'message' => $validated['message'],
            'type' => 'training'
        ]);

        return redirect()->route('payment.history')
            ->with('success', 'Terima kasih atas feedback Anda!');
    }
}