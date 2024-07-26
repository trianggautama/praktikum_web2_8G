<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function home()
    {
        $userLoggedIn = Auth::user();
        
        return view('home',compact('userLoggedIn'));
    }

    public function login(Request $request)
    {
        $credential = $request->only('username','password');

        if(Auth::attempt($credential)){
            //login berhasil
            $request->session()->regenerate();
            
            return redirect()->route('home');
        }else{
            //login gagal
            dd('login gagal');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('loginPage');
    }

}
