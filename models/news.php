<?php

class NewsModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM news ORDER BY id DESC");
        return $stmt->fetchAll();
    }
}
