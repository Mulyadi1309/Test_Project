<?php

namespace App\Services\Customer;

use App\Models\Customer;
use App\Services\Notification\NotificationService;
use Illuminate\Support\Facades\Hash;

class CustomerService
{
    protected $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function register(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        $customer = Customer::create($data);

        $this->notificationService->send('email', [
            'to' => $customer->email,
            'subject' => 'Welcome to Our Service',
            'message' => "Hello {$customer->name}, thank you for registering."
        ]);

        return $customer;

        $channel = new WAChannel();

        $status = $channel->send([
        'to' => $customer->phone_number,
        'message' => 'Halo, ini pesan percobaan!',
        ]);

        if ($status === 'success') {
            return 'Pesan berhasil dikirim via WA';
        } else {
            return 'Pesan gagal dikirim via WA';
        }
    }
}
