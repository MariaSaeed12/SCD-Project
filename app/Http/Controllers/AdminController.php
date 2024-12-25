<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function index()
    {
        // Check if the authenticated user is an admin
        if (Auth::user()->is_admin) {
            // Return the admin dashboard view
            return view('frontend.admin_dashboard'); // Make sure you have the correct view for admin dashboard
        }

        // If not an admin, redirect to home
        return view('frontend.index')->with('error', 'You do not have admin access.');
    }
}
