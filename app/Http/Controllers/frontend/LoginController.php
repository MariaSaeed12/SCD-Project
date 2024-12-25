<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; // Use Auth facade
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('frontend.login');
    }

    public function login(Request $request) {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        // Use Auth facade to attempt login
        if (Auth::attempt($credentials)) {
            // Check if the logged-in user is an admin
            if (auth()->Auth::user()->is_admin) {
                return redirect('/admin'); // Redirect admin users
            }
            return redirect('/home'); // Redirect regular users
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
