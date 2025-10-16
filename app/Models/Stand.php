<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Entrepreneur;
use App\Models\Produit;
use App\Models\Commande;

class Stand extends Model
{
    protected $fillable = [
        'nom_stand',
        'description',
        'prix',
        'image',
        'status',
        'user_id',
    ];

    public function Entrepreneur() {
        return $this->belongsTo(Entrepreneur::class);
    }

    public function produits() {
        return $this->hasMany(Produit::class);
    }

    public function commandes() {
        return $this->hasMany(Commande::class);
    }
}
