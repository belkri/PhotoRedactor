<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        return view('upload.create');
    }
    public function store(){
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'photo_id' => 'required|image',
            'task' => "required",
        ]);
        if(filter_has_var(INPUT_POST,'extra')) {
            $attributes['extra'] = 1;
       }

        $attributes['photo'] = request()->file('photo')->store('photos');

        User::create($attributes);
        return redirect('/');
     }
}
