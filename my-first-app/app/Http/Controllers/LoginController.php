<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function showLoginForm()
    {
        if(Auth::check()){
            return redirect('/dashboard');
        }
        return view('customizeLogin');
    }

    public function login(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate using Laravel's Auth system
        if (Auth::attempt($credentials)) { $request->session()->regenerate(); return redirect()->intended('/dashboard') ->with('success', 'Login Successful!'); }

        return back()->with('error', 'Invalid username or password.');
    }

    protected function redirectTo()
    {
        return '/dashboard';
    }

}
