<?php

namespace Siapp\Payments\Contracts;

interface PaymentGatewayInterface
{
    public function charge($amount, $currency);
}
