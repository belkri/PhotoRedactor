<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function store(){
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {

            return redirect('/admin')->with('success', 'Welcome Back!');
        }
        return back();
    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Auf Wiedersehen!');
    }
}
