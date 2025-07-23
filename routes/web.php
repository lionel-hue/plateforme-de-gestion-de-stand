<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\EntrepreneurAuthController;
use App\Http\Controllers\VisiteurAuthController;
use App\Http\Controllers\StandController;
use App\Http\Controllers\EntrepreneurDashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;

Route::get('/', [VisiteurController::class, 'index'])->name('accueil');

Route::get('/stand', [VisiteurController::class, 'stand'])->name('stand');

Route::get('/register/entrepreneur', [EntrepreneurAuthController::class, 'showRegistrationForm'])
    ->name('entrepreneur.register');
Route::post('/register/entrepreneur', [EntrepreneurAuthController::class, 'register'])->name('entre.register');

Route::get('/login/entrepreneur', [EntrepreneurAuthController::class, 'showLoginForm'])
    ->name('entrepreneur.login');
Route::post('/login/entrepreneur', [EntrepreneurAuthController::class, 'login'])->name('entre.login');

Route::get('/dashboard/entrepreneur', [EntrepreneurDashboardController::class, 'dashboard'])
    ->name('entrepreneur.dashboard');

Route::get('/visiteur/register', [VisiteurAuthController::class, 'showRegisterForm'])->name('visiteur.register');
Route::post('/visiteur/register', [VisiteurAuthController::class, 'register'])->name('visiteur.register');


// Connexion
Route::get('/visiteur/login', [VisiteurAuthController::class, 'showLogin'])->name('visiteurs.login');
Route::post('/visiteur/login', [VisiteurAuthController::class, 'submitLogin'])->name('submitLogin');


Route::get('/panier', [StandController::class, 'index'])->name('panier');
Route::get('/evènement', [StandController::class, 'evènement'])->name('evènement');


///Auth Admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login');
    Route::get('/register', [AdminAuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AdminAuthController::class, 'register'])->name('register');   
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
});



//routes Admin
Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/demandes', [AdminController::class, 'demandes'])->name('demandes');
    Route::post('/demandes/{id}/approuver', [AdminController::class, 'approuver']);
    Route::post('/demandes/{id}/rejetter', [AdminController::class, 'rejetter']);
    Route::get('/stands', [AdminController::class, 'stands'])->name('stands');
    Route::get('/commandes/{id}', [AdminController::class, 'commandesParStand'])->name('commandes');
});



//routes Admin
Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/demandes', [AdminController::class, 'demandes'])->name('demandes');
    Route::post('/demandes/{id}/approuver', [AdminController::class, 'approuver']);
    Route::post('/demandes/{id}/rejetter', [AdminController::class, 'rejetter']);
    Route::get('/stands', [AdminController::class, 'stands'])->name('stands');
    Route::get('/commandes/{id}', [AdminController::class, 'commandesParStand'])->name('commandes');
});


