<?php
header('Content-Type: text/html; charset=utf-8');

use component\Router AS Router;
spl_autoload_register();
$router = new Router();
$router->Route();