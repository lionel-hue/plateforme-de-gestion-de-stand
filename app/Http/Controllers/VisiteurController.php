<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    public function index()
    {
        return view('visiteurs.accueil'); 
    }
}
