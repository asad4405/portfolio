<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// banner
Route::resource('banner', BannerController::class, ['names' => 'admin.banner']);
