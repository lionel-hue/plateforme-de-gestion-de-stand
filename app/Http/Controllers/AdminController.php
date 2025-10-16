<?php

namespace App\Http\Controllers;

use App\Mail\RejetMail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestMail;
use App\Models\Commande;
use App\Models\Entrepreneur;
use App\Models\Stand;

class AdminController extends Controller
{
    /**
     * Affiche le tableau de bord de l'admin
     */
    public function dashboard(String $id){
        //Recupere le  nombre de demandes en attente, le nombre de stands approuves, le nombre de commandes par stand
        $demandesEnAttente = Entrepreneur::where('status', 'en_attente')->count();
        $standsApprouves = Entrepreneur::where('status', 'approuve')->count();
        $commandesParStand = Commande::whereJsonContains('details_commande->stand_id', $id)->get();

        //Affiche la statistique sur le dashboard
        return view('admin.dashboard', compact('demandesEnAttente', 'standsApprouves', 'commandesParStand'));
    }

    /**
     * Affiche la liste des demandes d'entrepreneurs
     */
    public function demandes(){
        //Affiche la liste des demandes d'entrepreneurs
        $demandes = Entrepreneur::where('status', 'en_attente')->get();
        return view('admin.demandes', compact('demandes'));
    }

    /**
     * Approuve une demande d'entrepreneur
     */
    public function approuver($id){
        //Recuperation de l'entrepreneur par son id
        $entrepreneur = Entrepreneur::findOrFail($id);
        //Mise a jour de l'entrepreneur
        $entrepreneur->update([
            'role' => 'entrepreneur',
            'statut' => 'approuve',
            'raison_rejet' => null
        ]);
        //Sauvegarde de l'entrepreneur
        $entrepreneur->save();
        //Envoi d'un email de confirmation
        if ($entrepreneur->email) {
            Mail::to($entrepreneur->email)->queue(new RequestMail($entrepreneur));
        }
        return back()->with('success', 'Demande approuvée.');
    }

    /**
     * Rejet une demande d'entrepreneur
     */
    public function rejetter(Request $request, $id){
        //Recuperation de l'entrepreneur par son id
        $entrepreneur = Entrepreneur::findOrFail($id);
        //Mise a jour de l'entrepreneur
        $entrepreneur->update([
            'statut' => 'refuse',
            'raison_rejet' => $request->input('raison_rejet')
        ]);
        //Sauvegarde de l'entrepreneur
        $entrepreneur->save();
        //Envoi d'un email de rejet
        if ($entrepreneur->email) {
            Mail::to($entrepreneur->email)->queue(new RejetMail($entrepreneur));
        }
        return back()->with('success', 'Demande rejetée.');
    }

    /**
     * Affiche la liste des stands
     */
    public function stands() {
        //Recuperation de tous les stands par ordre decroissant
        $stands = Stand::orderBy('created_at', 'desc')->get();
        //Affiche la liste des stands
        return view('admin.stands', compact('stands'));
    }

    /**
     * Affiche les commandes par Stand
     */
    public function commandesParStand($id) {
        //Recuperation de toutes les commandes par stand
        $commandes = Commande::whereJsonContains('details_commande->stand_id', $id)->get();
        //Recuperation du stand par son id
        $stand = Stand::findOrFail($id);
        //Affiche les commandes par stand
        return view('admin.commandes', compact('commandes', 'stand'));
    }
}
