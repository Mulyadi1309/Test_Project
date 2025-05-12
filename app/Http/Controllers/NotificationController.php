<?php

namespace App\Http\Controllers;

use App\Services\Notification\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    protected $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'channel' => 'required|string|in:email,wa',
            'to' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        return response()->json([
            'status' => $this->notificationService->send($validated['channel'], $validated),
        ]);
    }
}

