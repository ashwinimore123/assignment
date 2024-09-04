<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

 public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::guard('admin')->attempt($credentials)) {
        return redirect()->route('admin.products.index');
    }

    return back()->withErrors(['email' => 'Invalid credentials']);
}

// Logout method
public function logout()
{
    Auth::guard('admin')->logout();
    return redirect()->route('admin.login');
}


    public function dashboard()
    {
        return view('admin.dashboard');  // Ensure you have this view or update this as needed.
    }
}


