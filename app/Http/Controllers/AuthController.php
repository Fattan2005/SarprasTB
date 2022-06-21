<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        request()->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $kredensil = $request->only('email','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect()->intended('admin');
                }
                return redirect()->intended('/');
            }

            return redirect()->intended('/login')->withInput()->withErrors(['login_gagal' => 'These credentials do not match our records.']);;
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/'); 
    }
}

