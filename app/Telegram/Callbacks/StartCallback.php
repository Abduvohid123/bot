<?php

namespace App\Telegram\Callbacks;

class StartCallback
{
    public static function handle($bot)
    {

        return \Closure::fromCallable(function (\TelegramBot\Api\Types\CallbackQuery $query) use ($bot){

            try {
                $chatId = $query->getMessage()->getChat()->getId();
                $data = $query->getData();
                $messageId = $query->getMessage()->getMessageId();
                \App\Telegram\Callbacks\StartCallback::handle($bot,$query);

            } catch (Exception $exception) {

            }
        });

    }

}
