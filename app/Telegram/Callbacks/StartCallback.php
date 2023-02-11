<?php

namespace App\Telegram\Callbacks;

use App\Telegram\Buttons\StartButton;

class StartCallback
{
    public static function handle($bot,$query)
    {


            try {
                $chatId = $query->getMessage()->getChat()->getId();
                $data = $query->getData();
                $messageId = $query->getMessage()->getMessageId();
                $bot->editMessageText($chatId, $messageId, "salom", "HTML", false, StartButton::get());

            } catch (Exception $exception) {

            }


    }

}
