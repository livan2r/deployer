<?php

namespace Livan2r\Deployer\Facades;

use Illuminate\Support\Facades\Facade;

class Deployer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'deployer';
    }
}
