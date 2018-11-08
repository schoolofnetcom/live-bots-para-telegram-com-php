<?php

$telegram_router['/start'] = function ($data) use ($telegram) {
    $from = $data['message']['from'];
    $chat = $data['message']['chat'];

    $telegram->sendMessage([
        'chat_id' => $chat['id'],
        'text' => 'Oi, ' . $from['first_name'] . '... Posso te chamar de @' . $from['username']
    ]);
};

$telegram_router['/troca_email (.*)'] = function ($data, $params) use ($telegram) {
    $from = $data['message']['from'];
    $chat = $data['message']['chat'];

    $telegram->sendMessage([
        'chat_id' => $chat['id'],
        'text' => 'Ok, seu email foi trocado para ' . $params[1]
    ]);
};

$telegram_router['default_action'] = function ($data) use ($telegram) {
    $chat = $data['message']['chat'];

    $telegram->sendMessage([
        'chat_id' => $chat['id'],
        'text' => 'Eu não entendi...'
    ]);
};