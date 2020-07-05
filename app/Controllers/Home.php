<?php

namespace App\Controllers;

use NanoPHP\Controllers\BaseController;

class Home extends BaseController
{
    public function homepage(\App\Models\User $user)
    {
        print_r($user->getUserByName("Domenico"));
        return $this->getView();
    }
}
