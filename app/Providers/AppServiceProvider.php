<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Hada khassu ikun hna l-fouq

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
        // Hada huwa l-hal l-asasi bch l-CSS ikhdem f Railway
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }
    }
}