<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showUserDashboard()
    {
        if (Auth::check() && Auth::user()->role === 'user') {
            return view('userDashboard.userDashboard');
        }

        return redirect('/auth/login')->withErrors(['error' => 'You do not have access to this page.']);
    }
}
