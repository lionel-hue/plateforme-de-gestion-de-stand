<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrepreneur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class EntrepreneurAuthController extends Controller
{
    /**
     * Show the registration form
     */
    public function showRegistrationForm()
    {
        return view('auth.entrepreneur.register');
    }

    /**
     * Handle registration
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'enterprise_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:entrepreneurs',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $entrepreneur = Entrepreneur::create([
            'enterprise_name' => $request->enterprise_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'entrepreneur_waiting_approval',
            'status' => 'waiting',
        ]);

        // Log the entrepreneur in
        Auth::guard('entrepreneur')->login($entrepreneur);

        return redirect()->route('entrepreneur.dashboard')
            ->with('success', 'Registration successful! Your account is pending approval.');
    }

    /**
     * Show the login form
     */
    public function showLoginForm()
    {
        return view('auth.entrepreneur.login');
    }

    /**
     * Handle login
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('entrepreneur')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            
            $entrepreneur = Auth::guard('entrepreneur')->user();
            
            // Check if entrepreneur is rejected
            if ($entrepreneur->isRejected()) {
                Auth::guard('entrepreneur')->logout();
                return redirect()->back()->withErrors([
                    'email' => 'Your account has been rejected. Reason: ' . $entrepreneur->rejection_reason
                ]);
            }
            
            return redirect()->intended(route('entrepreneur.dashboard'));
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    /**
     * Handle logout
     */
    public function logout(Request $request)
    {
        Auth::guard('entrepreneur')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('entrepreneur.login');
    }
}
