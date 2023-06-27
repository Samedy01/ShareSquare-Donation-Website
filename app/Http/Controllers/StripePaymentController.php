<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Exception\ApiErrorException;
use Stripe\Exception\CardException;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\StripeClient;

class StripePaymentController extends Controller
{
    public function paymentStripe(){

        return view('stripe');
    }

    public function paymentRequest(Request $request){

//        dd(config('services.stripe.secret'));
//        dd($request->payment_method);

        try {
            $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
            $stripe->paymentIntents->create([
                'amount' => 99 * 100,
                'currency' => 'usd',
                'payment_method' => "pm_1NEEkUKvkwimcBFsmFQHi3u1",
                'description' => 'Demo payment with stripe',
                'confirm' => true,
            ]);
        } catch (CardException $th) {
            throw new Exception("There was a problem processing your payment", 1);
        } catch (ApiErrorException $e) {
        }

        exit();
        return back()->withSuccess('Payment done.');

    }

}
