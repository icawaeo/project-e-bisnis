<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminController extends Controller
{
    public function showAdminDashboard()
    {
        // Check if the user is authenticated and has the 'admin' role
        if (Auth::check() && Auth::user()->role === 'admin') {
            return view('adminDashboard.adminDashboard');
        }

        // If not an admin, redirect to the login page or show an error
        return redirect('/auth/login')->withErrors(['error' => 'You do not have access to this page.']);
    }

    public function index()
    {
        $users = User::onlyUsers()->get();

        return view('adminDashboard.adminDashboard', compact('users'));
    }
}
