<?php

namespace App\Http\Controllers;

use App\Mail\RejetMail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestMail;
use App\Models\Commande;
use App\Models\Stand;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function demandes(){
        $demandes = User::where('role', 'entrepreneur_en_attente')->get();
        return view('admin.demandes', compact('demandes'));
    }

    public function approuver($id){
        $user = User::findOrFail($id);
        $user->update([
            'role' => 'entrepreneur_approuve',
            'statut' => 'Approuvé',
            'raison_rejet' => null
        ]);
        if ($user->email) {
            Mail::to($user->email)->queue(new RequestMail($user));
        }
        return back()->with('success', 'Demande approuvée.');
    }

    public function rejetter(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update([
            'statut' => 'Rejeté',
            'raison_rejet' => $request->raison_rejet
        ]);
        if ($user->email) {
            Mail::to($user->email)->queue(new RejetMail($user));
        }
        return back()->with('success', 'Demande rejetée.');
    }

    public function stands() {
        $stands = User::where('role', 'entrepreneur_approuve')->get();
        return view('admin.stands', compact('stands'));
    }

    public function commandesParStand($id) {
        $commandes = Commande::whereJsonContains('details_commande->user_id', $id)->get();
        $stand = User::findOrFail($id);
        return view('admin.commandes', compact('commandes', 'stand'));
    }
}