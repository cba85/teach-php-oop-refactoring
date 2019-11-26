<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

$dbHost = "localhost";
$dbName = "test";
$dbUser = "root";
$dbPassword = "";

$db = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPassword);

$query = $db->query('SELECT * FROM articles');
$articles = $query->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Blog</h1>

        <?php foreach ($articles as $article) : ?>
        <div class="article">
            <h2><?= $article->title ?></h2>
            <h4><?= (new Carbon($article->created_at))->diffForHumans() ?></h4>
            <p><?= $article->content ?></p>
        </div>
        <?php endforeach ?>

    </div>
</body>
</html>
