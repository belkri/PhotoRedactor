<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/guest', function () {
    return view('welcome',[
        'users' => User::all()
    ]);
});
Route::get('/', function () {
    if (auth()->guest()){
        return redirect('/guest');
    }
    $users = User::latest();
    if(request('search')){
        $users->where('name', 'like', '%' . request('search') . '%');
    }
    return view('admin.welcome',[
    'users' => $users->get()
    ]);
});

Route::get('user/{user}', function ($id) {
    if (auth()->guest()){
        return redirect('/login');
    }
    return view('user',[
        'user' => User::find($id)]);
    }
);
Route::get('login', [LoginController::class, 'login'])->middleware('guest');
Route::post('login', [LoginController::class, 'store']);

Route::get('logout', [LoginController::class, 'destroy']);

Route::get('upload', [UploadController::class, 'upload']);
Route::post('upload', [UploadController::class, 'store']);