<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\GeneralSettingController;
use App\Http\Controllers\Backend\SocialMediaController;
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
// contact
Route::resource('contact', ContactController::class, ['names' => 'admin.setting.contact']);
// social media
Route::resource('social-media', SocialMediaController::class, ['names' => 'admin.setting.social-media']);
// contact us list & show
Route::get('/contact-us/list',[ContactController::class,'contactus_list'])->name('admin.contactus.list');
Route::get('/contact-us/show/{id}',[ContactController::class,'contactus_show'])->name('admin.contactus.show');
// education
Route::resource('education', EducationController::class, ['names' => 'admin.education']);
