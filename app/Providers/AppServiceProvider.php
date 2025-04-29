<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\GeneralSetting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $generalsetting = GeneralSetting::where('status', 1)->first();
        view()->share('generalsetting', $generalsetting);

        $blogs = Blog::where('status', 1)->get();
        view()->share('blogs', $blogs);
    }
}
