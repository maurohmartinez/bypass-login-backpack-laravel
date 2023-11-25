<?php

namespace MHMartinez\LoginAs\app\Providers;

use Illuminate\Support\ServiceProvider;

class LoginAsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Routes
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        // Config
        $this->publishes([
            __DIR__ . '/../../config/login_as.php' => config_path('login_as.php'),
        ], 'config');

        // Views
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'login_as');
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/login_as'),
        ], 'views');
    }
}