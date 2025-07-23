<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\VisiteurRequest;
use App\Http\Requests\VisiteurLoginRequest;
use Illuminate\Http\Request;

class VisiteurAuthController extends Controller
{
    // Affiche le formulaire d’inscription
    public function showRegisterForm()
    {
        return view('visiteurs.register');
    }

    // Traite l’inscription
    public function submitRegister(VisiteurRequest $request)
    {
        $validatedData = $request->validated();

        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name'  => $validatedData['last_name'],
            'phone'      => $validatedData['phone'],
            'email'      => $validatedData['email'],
            'password'   => Hash::make($validatedData['password']),
        ]);

        $user->save();

        return redirect()->route('login')->with('success', 'Inscription réussie ! Connectez-vous.');
    }

    // Affiche le formulaire de connexion
    public function showLogin()
    {
        return view('visiteurs.login');
    }
    public function login(VisiteurLoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            $request->session()->flash('success','Bienvenue sur Eat&Drink !');
            return redirect()->route('accueil');
        } else {
            return back()->withErrors([
                    'email' => 'Adresse email ou mot de passe incorrect.',
                ])->onlyInput('email');
            }
    }

    public function logout(Request $request)
    {   
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
