<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Community;

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
    // public function boot(): void
    // {
    //     Schema::defaultstringLength(191);
    // }
    public function boot()
    {
        // Menggunakan View Composer untuk menyediakan data komunitas ke semua view
        Schema::defaultstringLength(191);

        View::composer('*', function ($view) {
            $communities = Community::all();
            $view->with('komunitas', $communities);
        });
    }
}
