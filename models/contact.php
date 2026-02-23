<?php

class ContactModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function create($name, $email, $message)
    {
        $stmt = $this->pdo->prepare("
            INSERT INTO contacts (name, email, message)
            VALUES (?, ?, ?)
        ");

        return $stmt->execute([$name, $email, $message]);
    }
}
