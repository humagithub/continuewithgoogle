<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        Charge::create([
            "amount" => 100 * 100, // $100 in cents
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from Laravel"
        ]);

        return back()->with('success', 'Payment successful!');
    }
}

