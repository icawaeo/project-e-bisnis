<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
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

Route::get('/page/sellerDashboard', function () {
    return view('sellerDashboard.sellerDashboard');
});

Route::get('/page/pembayaran', function () {
    return view('pembayaran.pembayaran');
});


Route::get('/admin/dashboard', [AdminController::class, 'showAdminDashboard']);
Route::get('/admin/dashboard', [AdminController::class, 'index']);

Route::get('/seller/dashboard', [SellerController::class, 'showSellerDashboard']);
Route::get('/user/dashboard', [UserController::class, 'showUserDashboard']);

