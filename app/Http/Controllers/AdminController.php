<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class AdminController extends Controller
{
    public function show(){

    if (auth()->guest()){
        return redirect('/');
    }
    if (auth()->auth()){
        return redirect('/guest');
    }
    $users = User::latest();
    if(request('search')){
        $users->where('name', 'like', '%' . request('search') . '%');
    }
    return view('admin.welcome',[
    'users' => $users->get()
    ]);
}
    public function find($id){
    if (auth()->guest()){
        return redirect('/login');
    }
    return view('user',[
        'user' => User::find($id)]);
    }
}
