<?php

namespace Siapp\Payments\Services;

use Siapp\Payments\Contracts\PaymentGatewayInterface;

class PaymentService
{

    public function processPayment(PaymentGatewayInterface $paymentGateway, $amount, $currency)
    {
        return $paymentGateway->charge($amount, $currency);
    }
}
