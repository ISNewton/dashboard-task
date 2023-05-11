<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        $a = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        // dd($a);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->withErrors(['login' => 'Email / Password is incorrect'])->withInput();
        }

        return redirect()->intended(route('home'));
    }
}
