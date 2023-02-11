<?php

namespace App\Telegram\Commands;

class StartCommand
{

    public static function handle(\TelegramBot\Api\Types\Message $message)
    {
        $bot = new \TelegramBot\Api\Client('6022814437:AAGKJ8NsTWGxmENsZ3KcnE1YqA1RZKmCurw');

        try {


            $chatId = $message->getChat()->getId();
            $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup([[['text' => "O'zbek", 'callback_data' => "uz"], ['text' => 'English', 'callback_data' => "eng"]], [['text' => 'Русский', 'callback_data' => "ru"]]]);
            $bot->sendMessage($chatId, "<b>🇺🇿 Iltimos tilni tanlang!\n\n🇬🇧 Please! choose a language!\n\n🇷🇺 Пожалуйста, выберите язык!</b>", "HTML", false, null, $link);
        } catch (Exception $exception) {

        }
    }
}
