<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class CommandesController extends Controller
<<<<<<< HEAD
{
    public function index($id) {
        $commandes = Commande::whereJsonContains('details->user_id', $id)->get();
=======
{   
    public function index($id) {
        $commandes = Commande::whereJsonContains('details_commande->user_id', $id)->get();
>>>>>>> f962611fdb400e91ba0fc7842b0a9eb1546c9d6c
        return view('admin.commandes', compact('commandes'));
    }
}
