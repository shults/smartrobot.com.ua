<?php

require 'vendor/autoload.php';
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Slim.php';

$app = new Slim(require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'config.php');

$app->get('/', function() use ($app) {
    $app->render('index.php');
});

$app->post('/get_form_data', function() use ($app) {
    $app->contentType('application/json');

    $config = require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'liqpay_config.php';

    $xml = $app->render('_liqpay_request.xml.php', array(
        'price' => $app->request()->post('price'),
        'product_id' => $app->request()->post('product_id'),
        'config' => $config
    ), true);

    $app->response()->write(json_encode(array(
        'xml_encoded' => base64_encode($xml),
        'sign' => base64_encode(sha1($config['merc_sign'] . $xml . $config['merc_sign'], 1)),
    )));
});

$app->run();