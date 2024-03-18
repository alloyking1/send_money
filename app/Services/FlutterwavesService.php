<?php

namespace App\Services;

use App\Interfaces\PaymentGatewayInterface;

class FlutterwavesService implements PaymentGatewayInterface
{
    public function connection($apiKey): string
    {
        return response()->json('got to flutter wave service');
    }
}
