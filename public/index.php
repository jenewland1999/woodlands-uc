<?php

// Import PSR-4 Composer-generated autoloader and the DB connection
include __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/../src/connection.php';

// Extract the URL path and HTTP method (GET/POST)
$route = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);
$method = $_SERVER['REQUEST_METHOD'];

// Instantiate and run the app
(new \CupOfPHP\EntryPoint($pdo, $route, $method, new \WUC\WUCRoutes($pdo)))->run();
