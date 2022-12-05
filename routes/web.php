<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
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

Route::get('/', [UserController::class, 'index'])->middleware('guest');

Route::get('guest', [UserController::class, 'show'])->middleware('auth');

Route::get('profile', [UserController::class, 'profile'])->middleware('auth');

Route::get('admin', [AdminController::class, 'show'])->middleware('admin');

Route::get('user/{user:id}', [AdminController::class, 'find'])->middleware('admin');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'store']);

Route::get('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('upload', [UploadController::class, 'upload'])->middleware('auth');
Route::post('upload', [UploadController::class, 'store']);

Route::get('forgot-password', [ForgotPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('forgot-password', [ForgotPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');
    
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest');  