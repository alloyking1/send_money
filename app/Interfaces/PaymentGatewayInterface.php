<?php

namespace App\Interfaces;

interface PaymentGatewayInterface
{
    public function connection($apiKey): string;
}
