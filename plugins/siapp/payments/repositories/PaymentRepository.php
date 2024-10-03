<?php

namespace Siapp\Payments\Repositories;

use Siapp\Payments\Models\Payment;

class PaymentRepository
{
    public function find($id)
    {
        return Payment::find($id);
    }

    public function all()
    {
        return Payment::all();
    }

    public function create(array $data)
    {
        return Payment::create($data);
    }

    public function update($id, array $data)
    {
        $payment = Payment::find($id);
        if ($payment) {
            $payment->update($data);
            return $payment;
        }
        return null;
    }

    public function delete($id)
    {
        $payment = Payment::find($id);
        if ($payment) {
            return $payment->delete();
        }
        return null;
    }
}
