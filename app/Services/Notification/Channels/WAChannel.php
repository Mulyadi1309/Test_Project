<?php

namespace App\Services\Notification\Channels;

class WAChannel implements NotificationChannelInterface
{
    public function send(array $data): string
    {
        // Simulasi pengiriman WA
        \Log::info("WA sent to {$data['to']}: {$data['message']}");
        return "WA sent to {$data['to']}";
    }
}
