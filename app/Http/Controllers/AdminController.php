<?php

namespace App\Http\Controllers;

use App\Models\AdminLogin;
use App\Models\AdminRegister;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    public function showLoginForm()
    {
        return view('admin-login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Check if the admin has registered
        $admin = AdminRegister::where('email', $request->email)->first();
    
        if (!$admin) {
            // Admin not registered, redirect back with an error message
            return redirect()->route('admin.login')->with('error', 'Admin not registered');
        }
    
        // Attempt to log in the user using the 'admin' guard
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Record the login in the admin_logins table
            AdminLogin::create(['admin_id' => $admin->id]);
    
            // Authentication passed, redirect to the dashboard or any other desired page
            return redirect()->route('admin');
        }
    
        // Authentication failed, redirect back with an error message
        return redirect()->route('admin.login')->with('error', 'Invalid credentials');
    }

    public function showRegisterForm()
    {
        return view('admin-register');
    }


    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:admin_registers',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        // Create a new admin user
        AdminRegister::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        // Redirect to the admin dashboard or any other desired page
        return redirect()->route('admin.login');
    }
}
