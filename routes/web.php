<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;

Route::get('/', [AcceuilController::class, 'index'])->name('acceuil');



//Auth Admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});



//routes Admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/demandes', [AdminController::class, 'demandes'])->name('admin.demandes');
    Route::post('/demandes/{id}/approuver', [AdminController::class, 'approuver']);
    Route::post('/demandes/{id}/rejetter', [AdminController::class, 'rejetter']);
    Route::get('/stands', [AdminController::class, 'stands'])->name('admin.stands');
    Route::get('/commandes/{id}', [AdminController::class, 'commandesParStand']);
});
