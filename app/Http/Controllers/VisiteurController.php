<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    public function index()
    {
        return view('visiteurs.accueil'); 
    }

    public function stand()
    {
        return view('visiteurs.stand'); // Assurez-vous d'avoir cette vue
    }

    /*

    public function standWithId($id)
    {
        return view('visiteurs.stand', ['id' => $id]);
    }

    public function exposants()
    {
        return view('visiteurs.exposants');
    }

    public function panier()
    {
        return view('visiteurs.panier');
    }
    */
}