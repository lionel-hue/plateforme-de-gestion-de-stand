<?php

namespace App\Http\Controllers;

use App\Models\Stand;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    /**
     * Affiche la page d'accueil
     */
    public function index()
    {
        return view('visiteurs.accueil'); 
    }

    /**
     * Affiche la page de stand
     */
    public function stand()
    {
        //Recuperer les infos du stand
        $stands = Stand::all();
        return view('visiteurs.stand', compact('stands'));
    }

    /**
     * Affiche la page de profile
     */
    public function profile() {
        return view('visiteurs.profile');
    }

}