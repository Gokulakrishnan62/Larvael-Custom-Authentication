<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function authenticate(Request $request)
    {
        $request->validate([
           'email' => 'required|string|email',
           'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
            return back()->withErrors(['Invalid Email or Password gk']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
