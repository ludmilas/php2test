<?php
require 'boot.php';
/*$controller = new NewsController();
$controller->action('all');*/

if (isset($_GET['r'])) {
    $route = $_GET['r'];
    $routeParts = explode('/', $route);
    $controllerClassName = ucfirst($routeParts[0]) . 'Controller';


    $controller = new $controllerClassName;
    $controller->action($routeParts[1]);
}
else
{
    $controller = new NewsController();
    $controller->action('all');

}