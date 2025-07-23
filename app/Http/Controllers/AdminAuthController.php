<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminRequest; 
use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Requests\AdminRequestLogin; 


class AdminAuthController extends Controller
{
    public function showLoginForm(){
        return view('admin.login');
    }

    public function login(AdminRequestLogin $request){
        $credentials = $request->validated();
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password'], 'role' => 'admin'])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }    
        return back()->withErrors([
            'email' => 'Identifiants invalides ou rôle non autorisé.',
        ]);
    }

    public function showRegisterForm(){
        return view('admin.register');
    }

    public function register(AdminRequest $request){
        $credentials = $request->validated();
        $user = User::create([
            'nom_entreprise' => $credentials['nom_entreprise'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
            'token' => Str::random(60),
            'role' => 'admin',
        ]);
        $user->save();
        Auth::login($user);
        return redirect()->route('dashboard')->with('success', 'Compte admin créé.');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Vous avez été déconnecté.');
    }
} 