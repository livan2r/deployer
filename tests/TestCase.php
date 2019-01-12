<?php
/**
 * Created by PhpStorm.
 * User: livanrodriguez
 * Date: 2019-01-09
 * Time: 21:18
 */

namespace Livan2r\Deployer\Test;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Livan2r\Deployer\DeployerServiceProvider;
use Orchestra\Testbench\Exceptions\Handler;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Setup the test environment.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->disableExceptionHandling();
    }

    /**
     * Disable the error handling
     */
    protected function disableExceptionHandling()
    {
        $this->app->instance(ExceptionHandler::class, new class extends Handler {
            public function __construct() {}

            public function report(\Exception $e)
            {
                // no-op
            }

            public function render($request, \Exception $e) {
                throw $e;
            }
        });
    }

    /**
     * Load package service provider
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [DeployerServiceProvider::class];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Deployer' => 'Livan2r\Deployer\Facades\Deployer'
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // this config is not loaded yet, so we need to fix the environment
        $app['config']->set('deployer', [
            'enabled'    => true,
            'secret'     => env('DEPLOYER_SECRET', null),
            'driver'     => env('DEPLOYER_DRIVER', 'Github'),
            'notify'     => env('DEPLOYER_NOTIFY', null),

            // create an entry per each repository
            'projects' => [
                'hello-world' => ['deploy'], //repository-name => [envoy-task]
            ],
        ]);
    }
}
