<?php

namespace App;

class Routes
{
    public static function getRoutes(): array
    {
        return [
            '/' => 'Home@homepage',
        ];
    }
}
