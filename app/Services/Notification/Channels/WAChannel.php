<?php

namespace App\Services\Notification\Channels;

class WAChannel implements NotificationChannelInterface
{
    public function send(array $data): string
    {
        // Mock: return log / print pesan WA
        return "WA sent to {$data['to']}: {$data['message']}";
    }
}
