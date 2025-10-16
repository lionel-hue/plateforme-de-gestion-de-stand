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
use App\Models\Entrepreneur;

class EntrepreneurAuthController extends Controller
{
    /**
     * Affiche la page de registration
     */
    public function showRegistrationForm()
    {
        //Affiche de la page de registration
        return view('auth.entrepreneur.register');
    }

    /**
     * Gestion de la registration
     */
    public function register(UserRequest $request)
    {
        //Validation des données
        $validator = $request->validated();

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        //Creation de l'entrepreneur
        $user = Entrepreneur::create([
            'nom_entreprise'=> $request['nom_entreprise'],
            'email'=> $request['email'],
            'password'=> Hash::make($request['password']),
            'role'=> 'entrepreneur_en_attente',
            'status'=> 'en_attente',
        ]);
        // Connection de l'entrepreneur
        Auth::guard('entrepreneur')->login($user);

        return redirect()->route('entrepreneur.dashboard')
            ->with('success', 'Registration successful! Your account is pending approval.');
    }

    /**
     * Affiche la vue de login
     */
    public function showLoginForm()
    {
        return view('auth.entrepreneur.login');
    }

    /**
     * Gestion de la connection
     */
    public function login(UserLoginRequest $request)
    {
        //Validation des données
        $credentials = $request->validated();

        //Recuperation de l'entrepreneur
        $user = Entrepreneur::where('email', $credentials['email'])->first();
        
        //Verification des identifiants
        if (Auth::guard('entrepreneur')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            
            //Verification si l'entrepreneur est rejeté
            if ($user->status == 'refuse') {
                Auth::guard('entrepreneur')->logout();
                return redirect()->back()->withErrors([
                    'email' => 'Your account has been rejected. Reason: ' . $user->raison_rejet
                ]);
            }
            return redirect()->intended(route('entrepreneur.dashboard'));
        }
        return back()->withErrors([
            'email' => 'Identifiants invalides ou rôle non autorisé.',
        ]);
    }

    /**
     * Gestion du Logout
     */
    public function logout(Request $request)
    {
        //Deconnection de l'entrepreneur
        Auth::guard('entrepreneur')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('entrepreneur.login');
    }
}
