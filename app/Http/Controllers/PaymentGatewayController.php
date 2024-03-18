<?php

namespace App\Http\Controllers;

use App\Interfaces\PaymentGatewayInterface;
use Illuminate\Http\Request;

class PaymentGatewayController extends Controller
{
    public function __invoke(PaymentGatewayInterface $paymentGatewayInterface)
    {
        $apiKey = 'ksjdlfj223ete2434';
        $connection = $paymentGatewayInterface->connection($apiKey);
        return response()->json($connection);
    }
}
