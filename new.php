<?php
/**
 * Strategy for generating basic application skeleton
 */
$location = realpath(dirname(__FILE__)) . '/..';
$argv[2] = getcwd()."/".$argv[2];
mkdir($argv[2]);

// create configuration files
mkdir($argv[2] . '/config');
copy($location . '/templates/config/db.json', $argv[2] . '/config/db.json');
copy($location . '/templates/config/routes.php', $argv[2] . '/config/routes.php');

// initialize sample controller
mkdir($argv[2] . '/Controller');
copy($location . '/templates/Controller/IndexController.php', $argv[2] . '/Controller/IndexController.php');

// initialize middleware directory
mkdir($argv[2] . '/Middleware');

// Initialize Models directory with an example
mkdir($argv[2] . '/Models');
copy($location . '/templates/Models/User.php', $argv[2] . '/Models/User.php');

// initialize test directory
mkdir($argv[2]."/test");

// initialize views directory
mkdir($argv[2] . '/views');
copy($location . '/templates/views/base.php', $argv[2] . '/views/base.php');
copy($location . '/templates/views/error.php', $argv[2] . '/views/error.php');

// Add misc files
copy($location . '/templates/index.php', $argv[2] . '/index.php');
copy($location . '/templates/.htaccess', $argv[2] . '/.htaccess');
copy($location . '/templates/composer.json', $argv[2] . '/composer.json');