<?php

namespace Denkavia\Authenka\Providers;

use Illuminate\Support\ServiceProvider;

class AuthenkaServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/authenka.php', 'authenka');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/authenka.php' => config_path('authenka.php'),
            ]);
        }
    }
}
