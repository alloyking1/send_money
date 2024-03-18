<?php

namespace App\Providers;

use App\Interfaces\PaymentGatewayInterface;
use App\Services\FlutterwavesService;
use App\Services\PaystackService;
use Exception;
use Illuminate\Support\ServiceProvider;

class PaymentGatewayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            PaymentGatewayInterface::class,
            function ($app) {
                $driver = config('services.payment-gateway-driver');

                if ($driver === 'paystack') {
                    return new PaystackService();
                }

                if ($driver === 'flutterwave') {
                    return new FlutterwavesService();
                }

                throw new Exception('the payment gateway driver is invalid. Check your env file for the correct value');
            }
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
