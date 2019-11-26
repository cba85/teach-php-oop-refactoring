<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\Controller;

$dotenv = Dotenv\Dotenv::create(__DIR__ . "/..");
$dotenv->load();

$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');

$db = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPassword);

(new Controller)->index($db);
