<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GeneralSettingController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// banner
Route::resource('banner', BannerController::class, ['names' => 'admin.banner']);

// blogs
// blog category
Route::resource('blog-category', BlogCategoryController::class, ['names' => 'admin.blog-category']);
// blog
Route::resource('blog', BlogController::class, ['names' => 'admin.blog']);
// settings
Route::resource('generalsetting', GeneralSettingController::class, ['names' => 'admin.setting']);
