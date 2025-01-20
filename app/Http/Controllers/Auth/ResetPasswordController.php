<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function create()
    {
        return view('auth.reset-password');
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:members,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $member = Member::where('email', $request->email)->first();
        
        if ($member) {
            $member->update([
                'password' => Hash::make($request->password)
            ]);

            return redirect()->route('login')
                ->with('success', 'Password has been reset successfully. Please login with your new password.');
        }

        return back()
            ->withInput()
            ->with('error', 'Email not found in our records.');
    }
}