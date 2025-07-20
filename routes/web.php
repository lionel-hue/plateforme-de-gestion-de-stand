<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;

Route::get('/', [AcceuilController::class, 'index'])->name('acceuil');
