<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


define('ROOT', dirname(__FILE__));
define('CURRENT_URL', $_SERVER['SERVER_NAME']);

require_once(ROOT . '/core/Autoload.php');

$router = new Router();
$router->run();