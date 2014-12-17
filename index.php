<?php
require 'boot.php';
$controller = new NewsController();
$controller->action('all');
/*$route = $_GET['r'];
$routeParts= explode('/', $route);
$controllerClassName = ucfirst($routeParts[0]).'Controller';


$controller = new $controllerClassName;
$controller->action($routeParts[1]);*/