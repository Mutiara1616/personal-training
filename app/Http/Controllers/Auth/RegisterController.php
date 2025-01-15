<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:members',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $member = Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Remove automatic login
        // auth()->guard('member')->login($member);

        // Redirect to login page with success message
        return redirect()->route('login')
            ->with('success', 'Registration successful! Please login to continue.');
    }
}