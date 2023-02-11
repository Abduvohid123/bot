<?php

namespace App\Telegram\Callbacks;

class StartCallback
{
    public static function handle($bot,$query)
    {


            try {
                $chatId = $query->getMessage()->getChat()->getId();
                $data = $query->getData();
                $messageId = $query->getMessage()->getMessageId();

                $bot->sendMessage($chatId,"salom");

            } catch (Exception $exception) {

            }


    }

}
