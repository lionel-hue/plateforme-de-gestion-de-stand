<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\EntrepreneurAuthController;
use App\Http\Controllers\VisiteurAuthController;
use App\Http\Controllers\StandController;
use App\Http\Controllers\EntrepreneurDashboardController;

Route::get('/', [VisiteurController::class, 'index'])->name('accueil');

Route::get('/stand', [VisiteurController::class, 'stand'])->name('stand');

Route::get('/register/entrepreneur', [EntrepreneurAuthController::class, 'showRegistrationForm'])
    ->name('entrepreneur.register');
Route::post('/register/entrepreneur', [EntrepreneurAuthController::class, 'register']);

Route::get('/login/entrepreneur', [EntrepreneurAuthController::class, 'showLoginForm'])
    ->name('entrepreneur.login');
Route::post('/login/entrepreneur', [EntrepreneurAuthController::class, 'login']);

Route::get('/dashboard/entrepreneur', [EntrepreneurDashboardController::class, 'dashboard'])
    ->name('entrepreneur.dashboard');

Route::get('/visiteur/register', [VisiteurAuthController::class, 'showRegisterForm'])->name('visiteur.register');
Route::post('/visiteur/register', [VisiteurAuthController::class, 'register']);


// Connexion
Route::get('/visiteur/login', [VisiteurAuthController::class, 'showLogin'])->name('login');
Route::post('/visiteur/login', [VisiteurAuthController::class, 'submitLogin']);


Route::get('/panier', [StandController::class, 'index'])->name('panier');
Route::get('/evènement', [StandController::class, 'evènement'])->name('evènement');


/*
Route::prefix('visiteurs')->group(function () {
    Route::get('/accueil', [VisiteurController::class, 'accueil'])->name('visiteurs.accueil');
    Route::get('/exposants', [VisiteurController::class, 'exposants'])->name('visiteurs.exposants');
    Route::get('/panier', [VisiteurController::class, 'panier'])->name('visiteurs.panier');
});
*/

// Route::get('/stand/{id?}', [VisiteurController::class, 'stand'])->name('stand');
