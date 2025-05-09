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
use App\Http\Controllers\Backend\PreparationCategoryController;
use App\Http\Controllers\Backend\PreparationController;
use App\Http\Controllers\Backend\RoutineController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\SocialMediaController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\ThemeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // banner
    Route::resource('admin/banner', BannerController::class, ['names' => 'admin.banner']);

    // about
    Route::resource('/admin/admin/about', AboutController::class, ['names' => 'admin.about']);
    // counter
    Route::resource('/admin/counter', CounterController::class, ['names' => 'admin.counter']);
    // counter
    Route::resource('/admin/theme', ThemeController::class, ['names' => 'admin.theme']);

    // portfolio category
    Route::resource('admin/portfolio-category', PortfolioCategoryController::class, ['names' => 'admin.portfolio-category']);
    // portfolio
    Route::resource('admin/portfolio', PortfolioController::class, ['names' => 'admin.portfolio']);
    // blogs
    // blog category
    Route::resource('admin/blog-category', BlogCategoryController::class, ['names' => 'admin.blog-category']);
    // blog
    Route::resource('admin/blog', BlogController::class, ['names' => 'admin.blog']);
    // settings
    Route::resource('admin/generalsetting', GeneralSettingController::class, ['names' => 'admin.setting']);
    // contact
    Route::resource('admin/contact', ContactController::class, ['names' => 'admin.setting.contact']);
    // social media
    Route::resource('admin/social-media', SocialMediaController::class, ['names' => 'admin.setting.social-media']);
    // contact us list & show
    Route::get('/admin/contact-us/list', [ContactController::class, 'contactus_list'])->name('admin.contactus.list');
    Route::get('/admin/contact-us/show/{id}', [ContactController::class, 'contactus_show'])->name('admin.contactus.show');
    // education
    Route::resource('admin/education', EducationController::class, ['names' => 'admin.education']);
    // education
    Route::resource('admin/experience', ExperienceController::class, ['names' => 'admin.experience']);
    // testimonial
    Route::resource('admin/testimonial', TestimonialController::class, ['names' => 'admin.testimonial']);
    // skill
    Route::resource('admin/skill', SkillController::class, ['names' => 'admin.skill']);
    // preparation category
    Route::resource('admin/preparation-category', PreparationCategoryController::class, ['names' => 'admin.preparation-category']);
    // routine
    Route::resource('admin/routine', RoutineController::class, ['names' => 'admin.routine']);
    Route::get('/admin/routine-list', [RoutineController::class, 'list'])->name('admin.routine.list');
    Route::get('/admin/routine/up-date-status/{id}', [RoutineController::class, 'update_status'])->name('admin.routine.update-status');
});
