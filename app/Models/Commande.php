<?php

namespace App\Models;

use App\Models\Stand;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'details_commande',
        'stand_id',
        'date_commande',
    ];

    public function stand() {
        return $this->belongsTo(Stand::class);
    }
}
