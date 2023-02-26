<?php
// Defing the root directory of the application
define('APP_ROOT', __DIR__.'/../app');

// Serve static assets
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|woff2|eot|ttf|svg)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // Serve the requested file as-is
}

// Handle incoming HTTP requests
require_once(APP_ROOT . '/index.php');