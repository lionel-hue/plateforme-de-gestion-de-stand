<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminRequest; 
use Illuminate\Support\Str;
use App\Http\Requests\AdminRequestLogin;
use App\Models\User;

class AdminAuthController extends Controller
{
    public function showLoginForm(){
        return view('admin.login');
    }

    public function login(AdminRequestLogin $request){
        $credentials = $request->validated();
        //Recuperer l'utilisateur admin avec le role admin
        $admin = User::where('email', $credentials['email'])->first();
        //Vérifier si l'utilisateur admin existe et si le mot de passe est correct
        if ($admin && Hash::check($credentials['password'], $admin->password) && $admin->role === 'admin') {
            Auth::guard('admin')->login($admin);
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }    
        return back()->withErrors([
            'email' => 'Identifiants invalides ou rôle non autorisé.',
        ]);
    }

    /**
     *  Logout admin
     */    
    public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Vous avez été déconnecté.');
    }
} 