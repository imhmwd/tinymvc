<?php
session_start();
use \System\Bootstrap\Autoload;
use \System\router\Routing;

require_once('system/config.php');
require_once('system/bootstrap/Autoload.php');

$autoload = new Autoload;
$autoload->autoloader();

$router = new Routing;
$router->run();