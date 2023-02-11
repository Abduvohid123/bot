<?php

namespace App\Telegram\Buttons;

class StartButton
{
    public  $message;

    public function __construct()
    {
        $this->message="🇺🇿 Iltimos tilni tanlang!\n\n🇬🇧 Please! choose a language!\n\n🇷🇺 Пожалуйста, выберите язык!";
    }

    public  function get()
    {
        return new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup([[['text' => "O'zbek", 'callback_data' => "uz"], ['text' => 'English', 'callback_data' => "eng"]], [['text' => 'Русский', 'callback_data' => "ru"]]]);
    }
}
