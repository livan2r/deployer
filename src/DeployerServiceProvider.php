<?php

namespace Livan2r\Deployer;

use Illuminate\Support\ServiceProvider;
use Livan2r\Deployer\Drivers\Deployer;

class DeployerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // load the routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // publish the config
        $this->publishes([
            __DIR__ . '/../config/deployer.php' => config_path('deployer.php'),
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('deployer', function(){
            return new Deployer();
        });

        // controllers
        $this->app->make('Livan2r\Deployer\DeployerController');

        // views
        $this->loadViewsFrom(__DIR__ . '/views', 'Deployer');
    }
}
