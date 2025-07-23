<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserLoginRequest;

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
    public function register(UserRequest $request)
    {
        $validator = $request->validated();

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'nom_entreprise'=> $request['nom_entreprise'],
            'email'=> $request['email'],
            'password'=> Hash::make($request['password']),
            'role'=> 'entrepreneur_en_attente',
            'status'=> 'en_attente',
        ]);
        $user->save();  
        // Log the entrepreneur in
        Auth::guard('entrepreneur')->login($user);

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
    public function login(UserLoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::guard('entrepreneur')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            
            $user = Auth::guard('entrepreneur')->user();
            
            // Check if entrepreneur is rejected
            if ($user->status == 'refuse') {
                Auth::guard('entrepreneur')->logout();
                return redirect()->back()->withErrors([
                    'email' => 'Your account has been rejected. Reason: ' . $user->raison_rejet
                ]);
            }

            return redirect()->intended(route('entrepreneur.dashboard'));
        }

        throw ValidationException::withMessages([
            'email' => 'auth.failed',
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
