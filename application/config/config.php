<?php

use chsxf\MFX\Config;

Config::load([
    'twig' => [
        'templates' => [
            'views'
        ]
    ],

    'request' => [
        'default_route' => 'hello/world'
    ]
]);
