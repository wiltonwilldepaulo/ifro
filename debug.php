<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/app/helpers/settings.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

require __DIR__ . '/app/routes/routes.php';

$factory = new \Slim\Psr7\Factory\ServerRequestFactory();
$request = $factory->createServerRequest('GET', '/');

$response = $app->handle($request);

echo 'Status: ' . $response->getStatusCode() . PHP_EOL;
echo $response->getBody() . PHP_EOL;
