<?php

namespace App\Services\Notification;

use App\Services\Notification\Channels\EmailChannel;
use App\Services\Notification\Channels\WAChannel;

class NotificationService
{
    public function send(string $channel, array $data): string
    {
        $channelMap = [
            'email' => new EmailChannel(),
            'wa' => new WAChannel(),
        ];

        if (!isset($channelMap[$channel])) {
            throw new \Exception("Unsupported channel: $channel");
        }

        return $channelMap[$channel]->send($data);
    }
}
