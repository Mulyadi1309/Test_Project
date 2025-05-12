<?php

namespace App\Services\Notification\Channels;

interface NotificationChannelInterface
{
    public function send(array $data): string;
}
