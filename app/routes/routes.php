<?php

use App\Controller\Home;

$app->get('/', Home::class . ':home');
$app->get('/home', Home::class . ':home');
