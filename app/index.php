<?php
require_once 'config.php';

// Initialized controller, model and view
$controller = new HomeController();
$model = new HomeModel();
$view = new View($model);

// Run the controller and output the view
$controller->run($model, $view);