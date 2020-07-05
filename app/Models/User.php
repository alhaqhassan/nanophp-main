<?php

namespace App\Models;

class User extends BaseModel
{
    protected string $tableName = "users";

    public function getUserById(string $id): array
    {
        $sql  = "select users.name, users.surname from users where id = :id";
        $stmt = $this->dbInstance->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
