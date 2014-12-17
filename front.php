<?php
require 'boot.php';

$route = $_GET['r'];
$routeParts= explode('/', $route);
$controllerClassName = ucfirst($routeParts[0]).'Controller';


$controller = new $controllerClassName;
$controller->action($routeParts[1]);