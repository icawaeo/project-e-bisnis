<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
}); 

// todo: add middleware for authentication
// ->middleware('auth')

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

Route::get('/page/halamanMakanan', function () {
    return view('halamanMakanan.halamanMakanan');
});

Route::get('/admin/dashboard', [AdminController::class, 'showAdminDashboard'])->name('admin.dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.users');



Route::get('/page/404', function () {
    return view('errors.404');
});
Route::get('/page/500', function () {
    return view('errors.500');
});
Route::get('/page/503', function () {
    return view('errors.503');
});
Route::get('/page/403', function () {
    return view('errors.403');
});
Route::get('/page/401', function () {
    return view('errors.401');
});