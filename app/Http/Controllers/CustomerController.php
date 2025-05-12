<?php

namespace App\Http\Controllers;

use App\Services\Customer\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:6',
            'phone_number' => 'required|string',
        ]);

        $customer = $this->customerService->register($validated);

        return response()->json($customer, 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $customer = Customer::where('email', $credentials['email'])->first();

        if (!$customer || !Hash::check($credentials['password'], $customer->password)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $token = $customer->createToken('CustomerToken')->accessToken;

        return response()->json(['token' => $token]);
    }
}

