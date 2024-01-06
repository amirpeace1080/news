<?php
session_start();

require_once("system/config.php");

require_once("system/bootstrap/Autoload.php");

$autoload = new \system\bootstrap\Autoload();

$autoload->autoloader();
$router = new \system\router\Routing();
$router->run();

?>