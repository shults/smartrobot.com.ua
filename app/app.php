<?php

require 'vendor/autoload.php';
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Slim.php';
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Mail.php';

$main_config = require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'main_config.php';

$app = new Slim(require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'config.php');

/**
 * Index page
 */
$app->get('/', function() use ($app) {
    $app->render('index.php');
});

/**
 * Send json data
 */
$app->post('/get_form_data', function() use ($app, $main_config) {

    $app->contentType('application/json');

    $xml = $app->render('_liqpay_request.xml.php', array(
        'price' => $app->request()->post('price'),
        'product_id' => $app->request()->post('product_id'),
        'config' => $main_config
    ), true);

    $app->response()->write(json_encode(array(
        'xml_encoded' => base64_encode($xml),
        'sign' => base64_encode(sha1($main_config['merc_sign'] . $xml . $main_config['merc_sign'], 1)),
    )));

});

/**
 * Set order data and send email to admin
 */
$app->post('/set_order_data', function() use ($app, $main_config) {

    $app->contentType('application/json');

    $message = $app->render('_mail_to_admin.php', array(
        'user_name' => $app->request()->post('user_name'),
        'user_phone' => $app->request()->post('user_phone'),
        'user_email' => $app->request()->post('user_email'),
        'user_delivery_address' => $app->request()->post('user_delivery_address'),
        'xml' => base64_decode($app->request()->post('xml_encoded')),
    ), true);

    $mail = new Mail();
    $mail->setFrom($main_config['mail_from']);
    $mail->setSender($main_config['mail_from']);
    $mail->setSubject($main_config['mail_subject']);
    $mail->setTo($main_config['admin_email']);
    $mail->setText($message);
    $mail->send();

    $app->response()->write(json_encode(array(
        'error' => 0,
    )));

});

$app->run();