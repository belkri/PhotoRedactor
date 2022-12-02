<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Auth::routes();

Route::get('/', [GuestController::class, 'index']);

Route::get('guest', [GuestController::class, 'show']);

Route::get('admin', [AdminController::class, 'show'])->middleware('admin');

Route::get('user/{user:id}', [AdminController::class, 'find'])->middleware('admin');

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'store']);

Route::get('logout', [LoginController::class, 'destroy']);

Route::get('upload', [UploadController::class, 'upload']);
Route::post('upload', [UploadController::class, 'store']);