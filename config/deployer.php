<?php

return [
    'enabled' => env('DEPLOYER_ENABLED', true),
    'secret'  => env('DEPLOYER_SECRET', null),
    'driver'  => env('DEPLOYER_DRIVER', 'Github'),
    'notify'  => env('DEPLOYER_NOTIFY', 'livan2r@gmail.com'),
    'ref'     => env('DEPLOYER_REF', 'refs/heads/dev'),

    // create an entry per each repository
    'projects' => [
        'buk' => ['deploy'],
    ],
];
