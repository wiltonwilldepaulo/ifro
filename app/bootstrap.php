<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->addRoutingMiddleware();

$debug = (getenv('APP_DEBUG') ?: ($_ENV['APP_DEBUG'] ?? 'false')) === 'true';

$app->addErrorMiddleware($debug, $debug, $debug);

require __DIR__ . '/helpers/settings.php';
require __DIR__ . '/routes/routes.php';

return $app;
