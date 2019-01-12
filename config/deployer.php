<?php

return [
    'enabled'    => true,
    'secret'     => env('DEPLOYER_SECRET', null),
    'driver'     => env('DEPLOYER_DRIVER', 'Github'),
    'notify'     => env('DEPLOYER_NOTIFY', 'livan2r@gmail.com'),

    // create an entry per each repository
    'projects' => [
        'buk' => ['deploy'],
    ],
];
