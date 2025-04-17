<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CounterController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\GeneralSettingController;
use App\Http\Controllers\Backend\PortfolioCategoryController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\SocialMediaController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// banner
Route::resource('banner', BannerController::class, ['names' => 'admin.banner']);

// about
Route::resource('/admin/about', AboutController::class, ['names' => 'admin.about']);
// counter
Route::resource('/counter', CounterController::class, ['names' => 'admin.counter']);

// portfolio category
Route::resource('portfolio-category', PortfolioCategoryController::class, ['names' => 'admin.portfolio-category']);
// portfolio
Route::resource('portfolio', PortfolioController::class, ['names' => 'admin.portfolio']);
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
// education
Route::resource('experience', ExperienceController::class, ['names' => 'admin.experience']);
// skill
Route::resource('skill', SkillController::class, ['names' => 'admin.skill']);
