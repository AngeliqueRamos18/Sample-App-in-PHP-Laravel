<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request){
        $validated = $request->validate([
            'username' => 'required|string|max:100|unique:users,Username',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Insert into MSSQL
        User::create([
            'Username' => $validated['username'],
            'PasswordHash' => Hash::make($validated['password']),
        ]);

        // Redirect back with success message 
        return redirect()->back()->with('success', 'Registration Successful!');
    }
}
