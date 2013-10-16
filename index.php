<?php

require 'vendor/autoload.php';

use Slim\Slim as Slim;

$app = new Slim(array(
    'debug' => true,
    'templates.path' => './templates'
));

$app->get('/', function() use ($app) {
    $app->render('index.php');
});

$app->post('/get/:id', function($id) {
    echo $id;
});

$app->run();