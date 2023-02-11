<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Api;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/telegram', function () {
    $telegram = new Api('6022814437:AAGKJ8NsTWGxmENsZ3KcnE1YqA1RZKmCurw');
    return  $telegram->getMe();
});
