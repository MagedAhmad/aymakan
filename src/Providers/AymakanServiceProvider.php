<?php

namespace MagedAhmad\Aymakan\Providers;

use Illuminate\Support\ServiceProvider;
use MagedAhmad\Aymakan\Services\AymakanService;
use MagedAhmad\Aymakan\Controllers\AymakanController;

class AymakanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/carriers.php', 'aymakan'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );

        $this->app->singleton('aymakan', function () {
            return new AymakanController(new AymakanService());
        });
    }
}
