<?php

namespace MHMartinez\BypassLogin\app\Providers;

use Illuminate\Support\ServiceProvider;

class BypassLoginServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'bypass_login');

        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/bypass_login'),
        ], 'views');
    }
}
