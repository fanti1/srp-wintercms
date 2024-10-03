<?php

namespace  Siapp\Payments\Factories;

use Siapp\Payments\Contracts\PaymentGatewayInterface;
use Siapp\Payments\Services\PaypalService;
use Siapp\Payments\Services\MercadoLivreService;


class PaymentFactory
{
    public static function create($type): PaymentGatewayInterface
    {
        switch ($type) {
            case 'paypal':
                return new PaypalService();
            case 'mercadolivre':
                return new MercadoLivreService();
            default:
                throw new \Exception("Unsupported payment gateway type: $type");
        }
    }
}
