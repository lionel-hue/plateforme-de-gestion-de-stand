<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\AdminController;

Route::get('/', [AcceuilController::class, 'index'])->name('acceuil');


//routes Admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/demandes/{id}/approuver', [AdminController::class, 'approuver'])->name('admin.demandes.approuver');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/stands', [AdminController::class, 'stands'])->name('admin.stands');
    Route::post('/commandes/{id}', [AdminController::class, 'commandesParStand']);
});
