<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    //
    public function index() {
        return view('Auth.Regist', [
            'title' => "Registered",
        ]);
    }

    public function store(Request $request)
    {
        # code...
        $validatedDAta = $request->validate([
            'name'=> 'required|max:255',
            'email'=> 'required|email:dns|unique:users',
            'password' => 'required|min: 3|max:255'
        ]);
        $validatedDAta['password'] = Hash::make($validatedDAta['password']);

        User::create($validatedDAta);

        // $request->session()->flash('status', 'Task was successful!');

        return redirect('/login')->with('status','Registered Successfull');
        
    }
}
