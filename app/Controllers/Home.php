<?php

namespace App\Controllers;

use NanoPHP\Controllers\BaseController;

class Home extends BaseController
{
    public function __construct(\NanoPHP\DependencyInjector $di)
    {
        parent::__construct($di);
    }

    public function homepage()
    {
        return $this->getView();
    }
}
