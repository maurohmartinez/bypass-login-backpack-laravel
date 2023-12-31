<?php

namespace MHMartinez\BypassLogin\app\Providers;

use Illuminate\Support\ServiceProvider;

class BypassLoginServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Routes
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        // Views
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'login_as');
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/login_as'),
        ], 'views');
    }
}
