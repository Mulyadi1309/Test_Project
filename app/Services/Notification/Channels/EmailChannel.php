<?php

namespace App\Services\Notification\Channels;

use Illuminate\Support\Facades\Mail;

class EmailChannel implements NotificationChannelInterface
{
    public function send(array $data): string
    {
        Mail::raw($data['message'], function ($message) use ($data) {
            $message->to($data['to'])->subject($data['subject']);
        });
        return "Email sent to {$data['to']}";
    }
}
