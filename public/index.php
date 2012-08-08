<?php

error_reporting(E_ALL);

define('APPLICATION_PATH', __DIR__ . '/../application');

$app = new \Yaf\Application(APPLICATION_PATH . '/configs/application.ini');
$app->bootstrap()->run();