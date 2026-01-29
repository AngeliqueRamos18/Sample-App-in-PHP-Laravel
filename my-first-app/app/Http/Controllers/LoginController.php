<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate using Laravel's Auth system
        if (Auth::attempt([
            'Username' => $credentials['username'],
            'password' => $credentials['password'],
        ])){
            $request->session()->regenerate();
            return redirect()->intended('/welcome')
                             ->with('success', 'Login Successful!');
        }

        return back()->with('error', 'Invalid username or password.');
    }
}
