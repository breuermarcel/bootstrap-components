<?php

namespace Breuermarcel\BootstrapComponents\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'bc');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/bootstrap-components.php', 'bootstrap-components');
    }
}
