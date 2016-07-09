<?php

namespace Larafast\Laraking;

use Illuminate\Support\ServiceProvider;

class LarakingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('Larafast\Laraking\Console\Commands\LaraKingMainCrudGenerator');
    }
}
