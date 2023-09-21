<?php

namespace Sitebill\Types;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class TypesServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap the application services.
     *
     * @param \Illuminate\Routing\Router $router
     */
    public function boot(Router $router, Dispatcher $event)
    {
    }
}
