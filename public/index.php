<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('APPLICATION_PATH', __DIR__ . '/../application');

require APPLICATION_PATH . '/../vendor/autoload.php';

$app = new \Yaf\Application(APPLICATION_PATH . '/configs/application.ini');
$app->bootstrap()->run();