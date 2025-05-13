<?php

namespace App\Services\Notification\Channels;
use Illuminate\Support\Facades\Log;

class WAChannel implements NotificationChannelInterface
{
    public function send(array $data): string
    {
        // Mock: return log / print pesan WA
        Log::info("Mock WA: Pesan dikirim ke nomor {$data['to']}. Isi pesan: {$data['message']}");
        return true;
    }
}
