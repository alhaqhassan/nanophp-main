<?php

namespace App\Controllers;

class BaseController extends \NanoPHP\Controllers\BaseController
{
    public function __construct(\NanoPHP\DependencyInjector $di)
    {
        parent::__construct($di);
    }
}
