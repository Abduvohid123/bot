<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Api;
use Telegram\Bot\Laravel\Facades\Telegram;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/6022814437:AAGKJ8NsTWGxmENsZ3KcnE1YqA1RZKmCurw/webhook', function () {
    $updates = Telegram::getWebhookUpdates();

    return 'ok';
});

Route::get('/telegram', function () {
    $telegram = new Api('6022814437:AAGKJ8NsTWGxmENsZ3KcnE1YqA1RZKmCurw');
    $telegram->sendMessage([
       'chat_id'=>534310866,
       'text'=>"salom"
    ]);
});
