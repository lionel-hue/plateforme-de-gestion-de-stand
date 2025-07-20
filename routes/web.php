<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;

Route::get('/', [AcceuilController::class, 'index'])->name('acceuil');



//Auth Admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
});



//routes Admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/demandes', [AdminController::class, 'demandes'])->name('demandes');
    Route::post('/demandes/{id}/approuver', [AdminController::class, 'approuver']);
    Route::post('/demandes/{id}/rejetter', [AdminController::class, 'rejetter']);
    Route::get('/stands', [AdminController::class, 'stands'])->name('stands');
    Route::get('/commandes/{id}', [AdminController::class, 'commandesParStand']);
});
