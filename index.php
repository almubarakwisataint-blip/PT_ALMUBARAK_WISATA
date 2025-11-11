<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../laravel_app/vendor/autoload.php';

$app = require_once __DIR__ . '/../laravel_app/bootstrap/app.php';

$app->handleRequest(Request::capture());
