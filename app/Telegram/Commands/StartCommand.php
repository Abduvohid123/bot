<?php

namespace App\Telegram\Commands;

use App\Telegram\Buttons\StartButton;

class StartCommand
{

    public static function handle($bot)
    {

        return \Closure::fromCallable(function (\TelegramBot\Api\Types\Message $message) use ($bot){

            try {
                $chatId = $message->getChat()->getId();

                $bot->sendMessage($chatId, "<b>🇺🇿 Iltimos tilni tanlang!\n\n🇬🇧 Please! choose a language!\n\n🇷🇺 Пожалуйста, выберите язык!</b>", "HTML", false, null, StartButton::get());


            } catch (Exception $exception) {

            }
        });

    }
}
