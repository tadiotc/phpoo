<?php
use app\core\Router;
use app\support\RequestType;

require '../vendor/autoload.php';

session_start();

// dd($_SERVER);

dd(RequestType::get());

// dd( trim( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH )) );

Router::run();
