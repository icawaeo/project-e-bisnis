<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});

Route::get('/auth/login', function () {
    return view('login.login');
});

Route::get('/auth/register', [AuthController::class, 'showRegisterForm']);

Route::post('/auth/register', [AuthController::class, 'register']);

Route::get('/page/status', function () {
    return view('status.status');
});