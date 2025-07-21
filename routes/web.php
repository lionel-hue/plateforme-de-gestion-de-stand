<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiteurController;
//use App\Http\Controllers\Controller;


Route::get('/', [VisiteurController::class, 'index'])->name('accueil');


//Route::get('/stand/{id}', [VisiteurController::class, 'stand'])->name('visiteurs.stand');


/*Route::prefix('visiteurs')->group(function(){
    Route::get('/acceuil', [VisiteurController::class, 'accueil'])->name('acceuil');
});
/*Route::get('/exposants', [VisiteurController::class, 'exposants'])->name('visiteurs.exposants');


Route::get('/panier', [VisiteurController::class, 'panier'])->name('visiteurs.panier');*/
