<?php

namespace App\Controllers;

use PDO;
use App\Models\Article;

class Controller
{
    public function index(PDO $db)
    {
        $query = $db->query('SELECT * FROM articles');
        $articles = $query->fetchAll(PDO::FETCH_CLASS, Article::class);

        return require __DIR__ . "/../views/index.php";
    }
}
