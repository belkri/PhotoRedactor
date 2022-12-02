<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }
    
    public function show(){
        return view('user.welcome',[
            'user' => auth()->user()
        ]);
}    
    public function profile(){
        return view('user.profile',[
            'user' => auth()->user(),
            'photos' => auth()->user()->photo
        ]);
    }

}
