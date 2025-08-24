<!DOCTYPE html>
<html>
<head>
    <title>Stripe Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    @if (session('success'))
        <h3>{{ session('success') }}</h3>
    @endif

    <form action="{{ route('stripe.post') }}" method="POST" id="payment-form">
        @csrf
        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ config('services.stripe.key') }}"
            data-amount="10000"
            data-name="Test Payment"
            data-description="Laravel Stripe Payment"
            data-currency="usd">
        </script>
    </form>
</body>
</html>
