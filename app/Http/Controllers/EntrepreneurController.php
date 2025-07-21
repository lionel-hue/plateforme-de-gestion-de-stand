<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;  
use Illuminate\Support\Facades\Auth;

class EntrepreneurController extends Controller
{

    public function dashboard()
    {
        $user = Auth::user();

        $produits = Produit::where('user_id', $user->id)->get();

        return view('entrepreneur.dashboard', compact('produits'));
    }

    public function listeProduits()
    {
        $user = Auth::user();
        $produits = Produit::where('user_id', $user->id)->get();

        return view('entrepreneur.produits.index', compact('produits'));
    }

    public function creerProduit()
    {
        return view('entrepreneur.produits.create');
    }
    public function sauvegarderProduit(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048',
        ]);

        $produit = new Produit();
        $produit->user_id = Auth::id();
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->prix = $request->prix;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('produits', 'public');
            $produit->image_url = $path;
        }

        $produit->save();

        return redirect()->route('entrepreneur.produits')->with('success', 'Produit créé avec succès.');
    }

    public function modifierProduit($id)
    {
        $produit = Produit::where('user_id', Auth::id())->findOrFail($id);

        return view('entrepreneur.produits.edit', compact('produit'));
    }

    public function mettreAJourProduit(Request $request, $id)
    {
        $produit = Produit::where('user_id', Auth::id())->findOrFail($id);

        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048',
        ]);

        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->prix = $request->prix;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('produits', 'public');
            $produit->image_url = $path;
        }

        $produit->save();

        return redirect()->route('entrepreneur.produits')->with('success', 'Produit mis à jour avec succès.');
    }

    
    public function supprimerProduit($id)
    {
        $produit = Produit::where('user_id', Auth::id())->findOrFail($id);
        $produit->delete();

        return redirect()->route('entrepreneur.produits')->with('success', 'Produit supprimé.');
    }
}
