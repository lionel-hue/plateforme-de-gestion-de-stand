<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Stand;

class Produit extends Model
{
    protected $fillable = [
        'nom_produit',
        'description',
        'prix',
        'image',
        'stock',
        'stand_id',
    ];

    public function stand() {
        return $this->belongsTo(Stand::class);
    }
}
