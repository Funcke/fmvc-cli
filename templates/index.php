<?php
    /**
     * Entry-point for application.
     * Please extend as you wish.
     * Please notice that handling requests will only work when this routine is executed
     *  at some point and that it resembles the final response creation and sending.
     */

use FMVC\Environment\ProductionEnvironmentAdapter;

session_start();

error_reporting(E_ALL);
require_once(__DIR__.'/vendor/autoload.php');

$request = new FMVC\Request();
$environment = new ProductionEnvironmentAdapter();
$router = new FMVC\Router($environment, require_once('config/routes.php'));
$result = $router->handleRequest($request);
echo $result;
