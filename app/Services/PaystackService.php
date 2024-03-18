<?php

namespace App\Services;

use App\Interfaces\PaymentGatewayInterface;

class PaystackService implements PaymentGatewayInterface
{

    public function connection($apiKey): string
    {
        return response()->json('got to paystack service');
    }
}
