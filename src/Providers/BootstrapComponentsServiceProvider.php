<?php

namespace Breuermarcel\BootstrapComponents\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BootstrapComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'bc');

        $this->registerRoutes();
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/bootstrap-components.php', 'bootstrap-components');
    }

    private function routeConfiguration(): array
    {
        return [
            'prefix' => config('bootstrap-components.routing.prefix'),
            'as' => config('bootstrap-components.routing.as'),
            'middleware' => config('bootstrap-components.routing.middleware'),
        ];
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes.php');
        });
    }
}
