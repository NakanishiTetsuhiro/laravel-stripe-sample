<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostPaymentRequest;
use App\Services\PaymentService;
use App\Services\StripeService;

class PaymentsController extends Controller
{
    private $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }

    public function show()
    {
        $paymentAmountToStripe = PaymentService::calculatePaymentAmountToStripe(100);

        return view('welcome', compact(
            'paymentAmountToStripe'
        ));
    }

    public function payment(PostPaymentRequest $request)
    {
        $paymentAmountToStripe = PaymentService::calculatePaymentAmountToStripe(100);
        $this->stripeService->payment($paymentAmountToStripe, $request->stripeToken);

        return redirect('/thanks');
    }

    public function thanks(){
        return view('thanks');
    }
}
