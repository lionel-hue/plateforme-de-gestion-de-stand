<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrepreneurDashboardController extends Controller
{
    /**
     * Affiche le tableau de bord de l'entrepreneur
     */
    public function index()
    {
        $entrepreneur = Auth::guard('entrepreneur')->user();

        $data = [
            'entrepreneur' => $entrepreneur,
            'totalProducts' => 0, // À remplacer plus tard par un vrai décompte
            'totalOrders' => 0,
            'pendingOrders' => 0,
        ];

        return view('entrepreneur.dashboard', $data);
    }

    /**
     * Alias de index() si tu veux accéder à la méthode dashboard()
     */
    public function dashboard()
    {
        return $this->index(); // Réutilise la méthode index()
    }

    /**
     * Page de gestion des produits
     */
    public function products()
    {
        $entrepreneur = Auth::guard('entrepreneur')->user();

        return view('entrepreneur.products', compact('entrepreneur'));
    }

    /**
     * Page de consultation des commandes
     */
    public function orders()
    {
        $entrepreneur = Auth::guard('entrepreneur')->user();

        return view('entrepreneur.orders', compact('entrepreneur'));
    }
}
