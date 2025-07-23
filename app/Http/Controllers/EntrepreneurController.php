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

    public function dashboard()
    {
        $stand = Auth::stand();

        $produits = Produit::where('stand_id', $stand->id)->get();

        return view('entrepreneur.dashboard', compact('produits'));
    }

    public function listeProduits()
    {
        $stand = Auth::stand();
        $produits = Produit::where('stand_id', $stand->id)->get();

        return view('entrepreneur.produits.index', compact('produits'));
    }

    public function creerProduit()
    {
        return view('entrepreneur.produits.create');
    }
    public function sauvegarderProduit(EntrepreneurRequeust $request)
    {
        $validatedData = $request->validated();

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

    
    public function modifierProduit(EntrepreneurRequeust $request, $id)
    {
        $produit = Produit::where('stand_id', Auth::id())->findOrFail($id);

        return view('entrepreneur.produits.edit', compact('produit'));
    }

    /**
 * @param \App\Http\Requests\EntrepreneurRequeust $request
 */
    public function mettreAJourProduit(EntrepreneurRequeust $request, $id)
    {
        $produit = Produit::where('stand_id', Auth::id())->findOrFail($id);

        $validatedData = $request->validated();

        $produit->nom = $validatedData['nom'];
        $produit->description = $validatedData['description'];
        $produit->prix = $validatedData['prix'];
        $produit->image_url = $validatedData['image_url'];

        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('produits', 'public');
            $produit->image_url = $path;
        }

        $produit->save();

        return redirect()->route('entrepreneur.produits')->with('success', 'Produit mis à jour avec succès.');
    }

    /**
 * @param \App\Http\Requests\EntrepreneurRequeust $request
 */
    public function supprimerProduit(EntrepreneurRequeust $request, $id)
    {
        $produit = Produit::where('stand_id', Auth::id())->findOrFail($id);
        $produit->delete();

        return redirect()->route('entrepreneur.produits')->with('success', 'Produit supprimé.');
    }
}
