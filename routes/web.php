<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Api;
use Telegram\Bot\Laravel\Facades\Telegram;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/6022814437:AAGKJ8NsTWGxmENsZ3KcnE1YqA1RZKmCurw/webhook', function () {
    $telegram = new Api('6022814437:AAGKJ8NsTWGxmENsZ3KcnE1YqA1RZKmCurw');

  $telegram->getLastResponse();

})->name('webhook');












Route::get('/telegram', function () {
    $telegram = new Api('6022814437:AAGKJ8NsTWGxmENsZ3KcnE1YqA1RZKmCurw');
   dd($telegram->getLastResponse());

});
