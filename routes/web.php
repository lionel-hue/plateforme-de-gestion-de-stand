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
Route::get('/profile',  [VisiteurController::class, 'profile'])->name('profile');

Route::get('/register/entrepreneur', [EntrepreneurAuthController::class, 'showRegistrationForm'])
    ->name('entrepreneur.register');
Route::post('/register/entrepreneur', [EntrepreneurAuthController::class, 'register'])->name('entre.register');

Route::get('/login/entrepreneur', [EntrepreneurAuthController::class, 'showLoginForm'])
    ->name('entrepreneur.login');
Route::post('/login/entrepreneur', [EntrepreneurAuthController::class, 'login'])->name('entre.login');

// Route protege Entrepreneur
Route::middleware(['auth:entrepreneur'])->prefix('entrepreneur')->group(function () {
    Route::get('/dashboard', [EntrepreneurDashboardController::class, 'dashboard'])
    ->name('dashboard');
    Route::get('/statistique', [EntrepreneurDashboardController::class, 'statistique'])
    ->name('statistique');
    Route::get('/orders', [EntrepreneurDashboardController::class, 'orders'])
    ->name('orders');
    Route::get('/products', [EntrepreneurDashboardController::class, 'products'])
    ->name('products');
    Route::get('/addProduct', [EntrepreneurDashboardController::class, 'addProduct'])
    ->name('addProduct');
    Route::post('/logout', [EntrepreneurDashboardController::class, 'logout'])->name('logout');
});


Route::get('/visiteur/register', [VisiteurAuthController::class, 'showRegisterForm'])->name('visiteur.register');
Route::post('/visiteur/register', [VisiteurAuthController::class, 'register'])->name('visiteur.register');


// Connexion
Route::get('/visiteur/login', [VisiteurAuthController::class, 'showLogin'])->name('visiteurs.login');
Route::post('/visiteur/login', [VisiteurAuthController::class, 'submitLogin'])->name('submitLogin');


Route::get('/panier', [StandController::class, 'index'])->name('panier');
Route::get('/evènement', [StandController::class, 'evènement'])->name('evènement');


///Auth Admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login');
});

//routes protege Admin
Route::middleware(['auth:user','admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/demandes', [AdminController::class, 'demandes'])->name('demandes');
    Route::post('/demandes/{id}/approuver', [AdminController::class, 'approuver'])->name('approuver');
    Route::post('/demandes/{id}/rejetter', [AdminController::class, 'rejetter']);
    Route::get('/stands', [AdminController::class, 'stands'])->name('stands');
    Route::get('/commandes/{id}', [AdminController::class, 'commandesParStand'])->name('commandes');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});



/*//routes Admin
Route::middleware(['auth:admin','admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/demandes', [AdminController::class, 'demandes'])->name('demandes');
    Route::post('/demandes/{id}/approuver', [AdminController::class, 'approuver']);
    Route::post('/demandes/{id}/rejetter', [AdminController::class, 'rejetter']);
    Route::get('/stands', [AdminController::class, 'stands'])->name('stands');
    Route::get('/commandes/{id}', [AdminController::class, 'commandesParStand'])->name('commandes');
});*/


