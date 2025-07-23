<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StandController extends Controller
{
    public function index(){
        return view ("visiteurs.panier");
    }

    public function evènement(){
        return view ("visiteurs.evènement");
    }
}
