<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('blog-details/{slug}',[FrontendController::class,'blog_details'])->name('blog.details');
Route::get('contact-us',[FrontendController::class, 'contact'])->name('contact');
Route::post('contact-us/submit',[FrontendController::class, 'contact_submit'])->name('contact.submit');

// https: //themejunction.net/tailwind/gerold/demo/index-light.html // portfolio design

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__ . '/admin.php';
