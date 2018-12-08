@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="{{ asset('img/coffee_self_service_woman.png') }}" alt="" style="width: 100%; max-width: 600px;">

        <label class="amount">
            <h1>コーヒー販売所</h1>
            <p>価格：１本100円</p>
        </label>

        <form action="{{ url('/') }}" method="POST">
            @csrf
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="{{ config('services.stripe.key') }}"
                    data-description="お支払いはこちらで"
                    data-currency="JPY"
                    data-locale="ja"
                    data-amount="{{ $paymentAmountToStripe }}">
            </script>
        </form>
    </div>
</div>
@stop
