<?php

use SuHyMeBlaS\View;

$telegram = new Telegram\Api('788508515:AAEsqsPrMl6GAd6QhSQ-vXFI9J8so9HY7f4');

$router['/'] = function() {
    return View::render('home');
};

$router['/webhook'] = function() use ($telegram) {
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);

    $action = $data['message']['text'];
    
    $telegram_router = new Telegram\Router;
    require __DIR__ . '/telegram.php';
    $telegram_router->handler($action, $data);

    return '';
};

$router['/set-webhook'] = function() use ($telegram) {
    return (string)$telegram->setWebhook([
        'url'=>'https://74946c86.ngrok.io/webhook'
    ]);
};

$router['/delete-webhook'] = function() use ($telegram) {
    return (string)$telegram->deleteWebhook();
};

$router['/webhook-info'] = function() use ($telegram) {
    return (string)$telegram->getWebhookInfo();
};
