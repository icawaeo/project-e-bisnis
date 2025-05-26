<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function showSellerDashboard()
    {
        if (Auth::check() && Auth::user()->role === 'seller') {
            return view('sellerDashboard.sellerDashboard');
        }

        return redirect('/auth/login')->withErrors(['error' => 'You do not have access to this page.']);
    }
}
