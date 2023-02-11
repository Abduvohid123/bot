<?php

namespace App\Telegram\Buttons;

class StartButton
{

    public static function get()
    {
        return new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup([[['text' => "O'zbek", 'callback_data' => "uz"], ['text' => 'English', 'callback_data' => "eng"]], [['text' => 'Русский', 'callback_data' => "ru"]]]);
    }
}
