<?php

namespace App\Models;

class BaseModel extends \NanoPHP\Models\BaseModel
{
    protected string $tableName = "";

    public function __construct()
    {
        parent::__construct(\App\Config::getDBOptions());
    }
}
