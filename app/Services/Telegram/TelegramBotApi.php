<?php

namespace App\Services\Telegram;

use App\Services\Telegram\Exceptions\TelegramBotApiException;
use Illuminate\Support\Facades\Http;
use Throwable;


class TelegramBotApi
{
    const HOST = 'https://api.telegram.org/bot';

    /**
     * @throws TelegramBotApiException
     */
    public static function sendMessage(string $token, int $chatId, string $text): bool
    {
        try {
           $response = Http::get(self::HOST . $token . '/sendMessage', [
                'chat_id' => $chatId,
                'text' => $text
            ])->throw()->json();

           return $response['ok'] ?? false;
        } catch (Throwable $e) {
            report(new TelegramBotApiException($e->getMessage()));
            return false;
        }

    }

}
