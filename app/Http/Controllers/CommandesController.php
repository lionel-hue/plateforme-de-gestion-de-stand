<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class CommandesController extends Controller
{
    public function index($id) {
        $commandes = Commande::whereJsonContains('details->user_id', $id)->get();
        return view('admin.commandes', compact('commandes'));
    }
}
