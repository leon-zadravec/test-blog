<?php
declare(strict_types=1);

use App\RequestHandler\RequestHandler;

require dirname(__DIR__).'/../vendor/autoload.php';

$requestHandler =  new RequestHandler();
$requestHandler->handleRequest();
