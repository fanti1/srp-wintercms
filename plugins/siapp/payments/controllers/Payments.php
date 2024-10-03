<?php

namespace Siapp\Payments\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Siapp\Payments\Services\PaymentService;
use Request;
use Siapp\Payments\Factories\PaymentFactory;

/**
 * Payments Backend Controller
 */
class Payments extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        parent::__construct();

        $this->paymentService = $paymentService;

        BackendMenu::setContext('Siapp.Payments', 'payments', 'payments');
    }


    public function charge(Request $request)
    {
        $type = $request->input('gateway');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        try {
            $paymentGateway = PaymentFactory::create($type);
            $result = $this->paymentService->processPayment($paymentGateway, $amount, $currency);
            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
