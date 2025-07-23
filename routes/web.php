<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrepreneurAuthController;
use App\Http\Controllers\EntrepreneurDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello", function () {
    return "<button>hehehe</button>";
});

// Test route for debugging
Route::get('/test-register', function () {
    return '<h1>Test Registration Page</h1><p>This is a simple test without views</p>';
});

// Entrepreneur Authentication Routes
Route::prefix('entrepreneur')->name('entrepreneur.')->group(function () {
    // Guest routes (not authenticated) - temporarily removing middleware for debugging
    // Route::middleware('guest:entrepreneur')->group(function () {
        Route::get('/register', [EntrepreneurAuthController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register', [EntrepreneurAuthController::class, 'register']);
        Route::get('/login', [EntrepreneurAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [EntrepreneurAuthController::class, 'login']);
    // });
    
    // Authenticated routes
    Route::middleware('auth:entrepreneur')->group(function () {
        Route::get('/dashboard', [EntrepreneurDashboardController::class, 'index'])->name('dashboard');
        Route::get('/products', [EntrepreneurDashboardController::class, 'products'])->name('products');
        Route::get('/orders', [EntrepreneurDashboardController::class, 'orders'])->name('orders');
        Route::post('/logout', [EntrepreneurAuthController::class, 'logout'])->name('logout');
    });
});
