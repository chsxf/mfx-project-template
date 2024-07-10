<?php

use chsxf\MFX\Attributes\Route;
use chsxf\MFX\RequestResult;
use chsxf\MFX\Routers\IRouteProvider;

class Hello implements IRouteProvider
{
    #[Route]
    public static function world()
    {
        return new RequestResult(null, ['php_version' => PHP_VERSION]);
    }
}
