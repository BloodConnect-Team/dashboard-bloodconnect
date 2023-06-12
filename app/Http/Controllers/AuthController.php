<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $data['title'] = 'Login';
        return view('auth.login', compact('data'));
    }

    public function submit(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home');
        }

        // Authentication failed
        return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
    }

    public function forgot()
    {
        $data['title'] = 'Forgot Password';
        return view('auth.email', compact('data'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
