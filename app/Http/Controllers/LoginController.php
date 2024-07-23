<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(){
        return view('front.login');
    }
    function login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ],[
            'username.required'=>'Username Wajib Diisi',
            'password.required'=>'Password Wajib Diiisi'
        ]);

        $infologin =[
            'username'=>$request->username,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->user == 'admin'){
                return redirect('');
            } elseif(Auth::user()->user == 'pelayan'){
                return redirect('');
            } elseif(Auth::user()->user == 'kasir'){
                return redirect('');
            } elseif(Auth::user()->user == 'koki'){
                return redirect('');
            }
        }else{
            return redirect('')->withErrors('username dan Password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
