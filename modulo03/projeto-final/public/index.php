<?php

ini_set('display_errors', 1);

include dirname(__DIR__).'/vendor/autoload.php';

use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

$routes = include dirname(__DIR__).'/config/routes.php';

if (false == isset($routes[$url]))
{
    (new ErrorController())->notFoundAction();

    exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();