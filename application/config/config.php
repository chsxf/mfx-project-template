<?php

use chsxf\MFX\Config;

Config::load([
    'twig' => [
        'templates' => [
            'application/views'
        ]
    ],

    'request' => [
        'default_route' => 'hello/world'
    ]
]);
