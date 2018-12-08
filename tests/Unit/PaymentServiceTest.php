<?php

namespace Tests\Feature;

use App\Services\PaymentService;
use Tests\TestCase;

class PaymentServiceTest extends TestCase
{
    /**
     * @return void
     */
    public function testCalculatePaymentAmountToStripe()
    {
        // TODO: 必要な分だけテストを追加する

        $amount = PaymentService::calculatePaymentAmountToStripe(100);

        $this->assertSame($amount, 108);
    }
}
