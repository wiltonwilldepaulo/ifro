<?php

$app->get('/', App\Controller\Home::class . ':home');
$app->get('/home', App\Controller\Home::class . ':home');

$app->group('/cliente', function (Slim\Routing\RouteCollectorProxy $group) {
    $group->get('/lista', App\Controller\Customer::class . ':list');
    $group->get('/detalhes/{id}', App\Controller\Customer::class . ':details');
    $group->get('/detalhes', App\Controller\Customer::class . ':details');
    $group->post('/insert', App\Controller\Customer::class . ':insert');
    $group->post('/update', App\Controller\Customer::class . ':update');
    $group->post('/delete', App\Controller\Customer::class . ':delete');
    $group->post('/listingdata', App\Controller\Customer::class . ':listingdata');
});
