<?php

use system\bootstrap\Autoload;
use system\router\Routing;

session_start();

require_once('system/config.php');

require_once('system/bootstrap/Autoload.php');
$autoload = new Autoload();
$autoload->autoloader();

$router = new Routing();
$router->run();