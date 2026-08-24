<?php

namespace App\Providers;

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
        // Production Environment (Render) ပေါ်ရောက်ပါက HTTPS သို့ Force ပြောင်းခိုင်းခြင်း
        if (config('app.env') === 'production' || $this->app->environment('production')) {
            URL::forceScheme('https');
    }
}
