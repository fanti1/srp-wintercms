<?php


namespace Siapp\Payments\Services;

use Siapp\Payments\Contracts\PaymentGatewayInterface;

class PaypalService implements PaymentGatewayInterface
{
    public function charge($amount, $currency)
    {
        // Charge the payment using Paypal API
    }
}
