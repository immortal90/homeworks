<?php

if ($_SERVER['HTTP_HOST'] == 'www.djerelce.com.ua') {
    define('DEBUG', false);
} else {
    define('DEBUG', true);
}

session_start();

define('DEFAULT_USER_ID', 1);
require 'vendor/autoload.php';

$router = new Router();

$url = Application::request()->getUrl();

$router->setUrl($url);

$router->delegate();