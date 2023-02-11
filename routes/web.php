<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/6022814437:AAGKJ8NsTWGxmENsZ3KcnE1YqA1RZKmCurw/webhook', function () {
    /**
     * @var $bot \TelegramBot\Api\Client | \TelegramBot\Api\BotApi
     */
    $bot = new \TelegramBot\Api\Client('6022814437:AAGKJ8NsTWGxmENsZ3KcnE1YqA1RZKmCurw');

    $bot->command(
        'start',
        \App\Telegram\Commands\StartCommand::handle($bot)
    );
    $bot->callbackQuery(

        static function (\TelegramBot\Api\Types\CallbackQuery $query) use ($bot) {
            try {
                $chatId = $query->getMessage()->getChat()->getId();
                $data = $query->getData();
                $messageId = $query->getMessage()->getMessageId();
                $bot->sendMessage($chatId, "button bosildi");
            } catch (Exception $exception) {

            }
        });
    $bot->editedMessage(

        static function (\TelegramBot\Api\Types\Message $message) {
            echo "EDITED: " . $message->getText() . PHP_EOL;
        });
    $bot->on(
        static function (\TelegramBot\Api\Types\Update $update) use ($bot) {
            return true;
        },
        static function (\TelegramBot\Api\Types\Update $update) use ($bot) {


            try {
                $text = $update->getMessage()->getText();
                $chatId = $update->getMessage()->getChat()->getId();

                $bot->sendMessage($chatId, strrev($text));

            } catch (Exception $e) {

            }

            return true;
        }
    );
    $bot->run();


})->name('webhook');
