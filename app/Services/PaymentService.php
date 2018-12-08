<?php

namespace App\Services;

class PaymentService
{
    /**
     * Stripe側へ支払う金額を計算
     * INFO: 独自の計算式がある場合は、ここに計算式を追記していく
     *
     * @param int $amount
     * @return int The created resource.
     */
    public static function calculatePaymentAmountToStripe(int $amount): int
    {
        $salesTax = 1.08;

        $paymentAmountToStripe = ceil($amount * $salesTax);

        return $paymentAmountToStripe;
    }
}
