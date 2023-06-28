<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(){
        $data['title'] = 'Login';
        return view('auth.login', compact('data'));
    }

    public function submit(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $cek = User::where('email', $request->email)->first();
        if($cek->role == "1" OR $cek->role == "2"){
            if (Auth::attempt($credentials)) {
                return redirect()->intended('/home');
            }else{
                return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
            }
        }else{
            return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
        }

    }

    public function forgot(){
        $data['title'] = 'Forgot Password';
        return view('auth.email', compact('data'));
    }

    public function submitForgot(Request $request){
        $cek = User::where('email', $request->email)->first();
        if($cek == null){
            return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
        }else{
            Http::post(env('API').'/api/auth/forget', [
                'email' => $request->email,
            ]);
            return redirect()->back()->with('status','sukses');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
