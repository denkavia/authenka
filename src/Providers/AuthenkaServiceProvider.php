<?php

namespace Denkavia\Authenka\Providers;

use Denkavia\Authenka\Authenka;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class AuthenkaServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/authenka.php', 'authenka');

        $this->app->alias(Authenka::class, 'authenka');

        $this->app->singleton('authenka', function (Container $app) {
            return new Authenka($app);
        });
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
