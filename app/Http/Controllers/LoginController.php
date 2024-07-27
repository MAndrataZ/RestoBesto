<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('front.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username Wajib Diisi',
            'password.required' => 'Password Wajib Diiisi'
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.index');
            } elseif (Auth::user()->role == 'pelayan') {
                return redirect()->route('pelayan.menu');
            } elseif (Auth::user()->role == 'kasir') {
                return redirect()->route('kasir.index');
            } elseif (Auth::user()->role == 'koki') {
                return redirect()->route('koki.stok');
            }
        } else {
            return redirect()->route('login')->withErrors('Username dan Password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
