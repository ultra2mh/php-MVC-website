<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT . DS . 'views');


require_once(ROOT . DS . 'lib' . DS . 'init.php');

//$router = new Router($_SERVER['REQUEST_URI']);
//
//echo '<pre>';
//print_r('Route: '.$router->getRoute().PHP_EOL);
//print_r('Languges: '.$router->getLanguage().PHP_EOL);
//print_r('Controller: '.$router->getController().PHP_EOL);
//print_r('action to be called: '.$router->getMethodPrefix().$router->getAction().PHP_EOL);
//echo "params : ";
//print_r($router->getParams());

session_start();
// Create a new CSRF token.

App::run($_SERVER['REQUEST_URI']);
