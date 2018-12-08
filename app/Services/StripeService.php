<?php

namespace App\Services;

use Stripe\Charge;
use Stripe\Stripe;

class StripeService
{
    /**
     * @param int $amount
     * @param string $token
     * @return \Stripe\ApiResource The created resource.
     */
    public function payment(int $amount, string $token)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $charge = Charge::create([
            'amount' => $amount,
            'currency' => 'jpy',
            'source' => $token
        ]);

        return $charge;
    }
}
