<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use function Symfony\Component\String\b;

class LogController extends Controller
{
    //
    public function dashboard() {
        return view('Auth.dashboard', [
            'title' => "Dashboard",
        ]);
    }
    public function login() {
        return view('Auth.Login', [
            'title' => "Login",
        ]);
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=> 'required|email:dns',
            'password' =>'required',
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/index')->with('LoginSuccess','Login Success');
        }
        return back()->with('LoginError','Gagal Login!!');

    }
}
