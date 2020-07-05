<?php

namespace App\Controllers;

use App\Config;
use NanoPHP\Controllers\BaseController;

class Home extends BaseController
{
    public function __construct()
    {
        parent::__construct(Config::getAllOptions());
    }

    public function homepage()
    {
        return $this->getView();
    }
}
