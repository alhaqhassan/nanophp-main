<?php

namespace App\Controllers;

use NanoPHP\Controllers\BaseController;

class Home extends BaseController
{
    public function homepage(\App\Models\User $user)
    {
        return $this->getView();
    }
}
