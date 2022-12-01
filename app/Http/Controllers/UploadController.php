<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        return view('user.create');
    }
    public function store(){
        $user = auth()->user()->id;

        $attributes = request()->validate([
            'photo' => 'required|image',
            'task' => "required",
        ]);
        if(filter_has_var(INPUT_POST,'extra')) {
            $attributes['extra'] = 1;
       };
       $attributes['user_id'] = $user;

        $attributes['photo'] = request()->file('photo')->store('photos');

        Photo::create($attributes);
        return redirect('/guest');
     }
}
