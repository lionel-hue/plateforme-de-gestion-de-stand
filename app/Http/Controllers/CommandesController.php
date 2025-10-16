<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class CommandesController extends Controller
{   
    /**
     * Affiche les commandes par stand
     */
    public function index($id) {
        //Recuperation des commandes par stand
        $commandes = Commande::whereJsonContains('details_commande->stand_id', $id)->get();
        //Affiche les commandes par stand
        return view('admin.commandes', compact('commandes'));
    }
}
