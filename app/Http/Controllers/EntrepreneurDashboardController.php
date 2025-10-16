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
        //Recuparion de l'entrepreneur
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
        //Recuperation de l'entrepreneur 
        $entrepreneur = Auth::guard('entrepreneur')->user();

        return view('entrepreneur.products', compact('entrepreneur'));
    }

    /**
     * Page de consultation des commandes
     */
    public function orders()
    {
        //Recuperation de l'entrepreneur 
        $entrepreneur = Auth::guard('entrepreneur')->user();

        return view('entrepreneur.orders', compact('entrepreneur'));
    }

    /**
     * Page de statistique
     */
    public function statistique()
    {
        //Recuperation de l'entrepreneur 
        $entrepreneur = Auth::guard('entrepreneur')->user();

        return view('entrepreneur.statistique', compact('entrepreneur'));
    }

    /**
     * Page de creation d'un produit
     */
    public function addProduct() {
        $entrepreneur = Auth::guard('entrepreneur')->user();

        return view('entrepreneur.add_product', compact('entrepreneur'));
    }

    /**
     * Deconnexion de l'entrepreneur
     */
    public function logout() {
        Auth::guard('entrepreneur')->logout();
        return redirect()->route('accueil');
    }
}
