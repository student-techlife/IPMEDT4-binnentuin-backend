<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use DB;

class MollieController extends Controller
{
    public function preparePayment() {
        // dd($data);
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => "10.00" // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Bestelnummer",
            "redirectUrl" => 'https://binnentuin.live',
            "webhookUrl" => route('webhooks.mollie'),
            "metadata" => [
                "order_id" => "12345",
            ],
        ]);
    
        $payment = Mollie::api()->payments->get($payment->id);
    
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function handle(Request $request) {
        if (! $request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid()) {
            return redirect('https://binnentuin.live/bevestiging');
        }
    }

    public function savebestelling(Request $request) {
        return redirect()->route('checkout.get');
    }
}
