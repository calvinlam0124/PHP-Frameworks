<?php declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use Siler\Route;

Route\get('/', function () {
    echo 'Hello World';
});
