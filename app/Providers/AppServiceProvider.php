<?php

namespace App\Providers;

use App\Services\YouTubeRSSService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register YouTube RSS Service as singleton
        $this->app->singleton(YouTubeRSSService::class, function ($app) {
            return new YouTubeRSSService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Remove parent::boot() - ServiceProvider doesn't have a boot method to call
        Route::middleware('web')
            ->group(base_path('routes/admin.php'));

        // Log YouTube data updates for monitoring
        if ($this->app->environment('production')) {
            \Illuminate\Support\Facades\Log::info('YouTube RSS Service initialized');
        }
    }
}
