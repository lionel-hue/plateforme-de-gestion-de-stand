<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StandController extends Controller
{
    /**
     * Affiche le panier
     */
    public function index(){
        return view ("visiteurs.panier");
    }

    /**
     * Affiche l'evènement
     */
    public function evènement(){
        return view ("visiteurs.evènement");
    }
}
