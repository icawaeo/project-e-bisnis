<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
})->middleware('auth');

// register route
Route::get('/auth/register', [AuthController::class, 'showRegisterForm']);
Route::post('/auth/register', [AuthController::class, 'register']);

// login route
Route::get('/auth/login', [AuthController::class, 'showLoginForm']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::post('/auth/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/auth/login');
});

Route::get('/page/status', function () {
    return view('status.status');
});