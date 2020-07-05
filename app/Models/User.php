<?php

namespace App\Models;

class User extends BaseModel
{
    protected string $tableName = "users";

    public function getUserByName(string $name): array
    {
        $sql  = "select users.name, users.surname from users where name = :name";
        $stmt = $this->dbInstance->prepare($sql);
        $stmt->execute(['name' => $name]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
