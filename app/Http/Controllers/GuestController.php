<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GuestController extends Controller
{
    public function index(){
    return view('welcome');
    }
    
    public function show(){
        return view('user.welcome',[
            'user' => User::latest()
        ]);
    ;
}
}
