<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.feedback');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'type' => 'required|string',
            'message' => 'required|string'
        ]);

        $feedback = Feedback::create([
            'member_id' => Auth::guard('member')->id(),
            'rating' => $validated['rating'],
            'type' => $validated['type'],
            'message' => $validated['message']
        ]);

        return redirect()->route('home')
            ->with('success', 'Thank you for your feedback!');
    }
}