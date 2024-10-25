<?php
// src/AdminPackageServiceProvider.php
namespace Mamunpro\Simpleslider\Providers;

use Illuminate\Support\ServiceProvider;

class SimpleSliderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes, views, etc.
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'simpleSlider');
    }

    public function register()
    {
        // Package-specific bindings can go here
    }
}

