<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;  
use App\Models\Stand;
use App\Models\Commande;  
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rule;
use App\Http\Requests\EntrepreneurRequeust;

class EntrepreneurController extends Controller
{

    /**
     * Affiche le tableau de bord de l'entrepreneur
     */
    public function dashboard()
    {
        //Recuperation du stand de l'entrepreneur
        $stand = Auth::stand();

        //Recuperation des produits de l'entrepreneur
        $produits = Produit::where('stand_id', $stand->id)->get();

        //Affiche le tableau de bord de l'entrepreneur
        return view('entrepreneur.dashboard', compact('produits'));
    }

    /**
     * Affiche la liste des produits
     */
    public function listeProduits()
    {
        //Recuperation du stand de l'entrepreneur
        $stand = Auth::stand();
        //Recuperation des produits de l'entrepreneur
        $produits = Produit::where('stand_id', $stand->id)->get();

        //Affiche la liste des produits
        return view('entrepreneur.produits.index', compact('produits'));
    }

    /**
     * Affiche la page de creation d'un produit
     */
    public function creerProduit()
    {
        return view('entrepreneur.produits.create');
    }
    
    /**
     * Sauvegarde d'un produit
     */
    public function sauvegarderProduit(EntrepreneurRequeust $request)
    {
        //Validation des données
        $validatedData = $request->validated();

        //Creation du produit
        $produit = new Produit();
        $produit->stand_id = Auth::id();
        $produit->nom = $validatedData['nom'];
        $produit->description = $validatedData['description'];
        $produit->prix = $validatedData['prix'];

        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('produits', 'public');
            $produit->image_url = $path;
        }

        $produit->save();

        return redirect()->route('entrepreneur.produits')->with('success', 'Produit créé avec succès.');
    }

    /**
     * Affiche la page de modification d'un produit
     */    
    public function modifierProduit(EntrepreneurRequeust $request, $id)
    {
        //Recuperation du produit
        $produit = Produit::where('stand_id', Auth::id())->findOrFail($id);

        //Affiche la page de modification d'un produit
        return view('entrepreneur.produits.edit', compact('produit'));
    }

    /**
     * Mise a jour d'un produit
     */
    public function mettreAJourProduit(EntrepreneurRequeust $request, $id)
    {
        //Recuperation du produit
        $produit = Produit::where('stand_id', Auth::id())->findOrFail($id);

        //Validation des données
        $validatedData = $request->validated();

        //Mise a jour du produit
        $produit->nom = $validatedData['nom'];
        $produit->description = $validatedData['description'];
        $produit->prix = $validatedData['prix'];
        $produit->image_url = $validatedData['image_url'];

        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('produits', 'public');
            $produit->image_url = $path;
        }

        //Sauvegarde du produit
        $produit->save();

        return redirect()->route('entrepreneur.produits')->with('success', 'Produit mis à jour avec succès.');
    }

    /**
     * Suppression d'un produit
     */
    public function supprimerProduit(EntrepreneurRequeust $request, $id)
    {
        //Recuperation du produit
        $produit = Produit::where('stand_id', Auth::id())->findOrFail($id);

        //Suppression du produit
        $produit->delete();

        return redirect()->route('entrepreneur.produits')->with('success', 'Produit supprimé.');
    }
}
