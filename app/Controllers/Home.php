<?php

namespace App\Controllers;

use NanoPHP\Controllers\BaseController;
use NanoPHP\Library\Http\Response;

class Home extends BaseController
{
    public function homepage(Response $response)
    {
        return $response->setStatus(200)
                        ->setBody($this->getView())
                        ->get();
    }
}
