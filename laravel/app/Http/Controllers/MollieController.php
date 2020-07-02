<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use DB;

class MollieController extends Controller
{
    public function preparePayment($data) {
        dd($data);
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => "10.00" // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Bestelnummer",
            "redirectUrl" => 'https://binnentuin.live',
            "webhookUrl" => 'https://binnentuin.live',
            "metadata" => [
                "order_id" => "12345",
            ],
        ]);
    
        $payment = Mollie::api()->payments->get($payment->id);
    
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }
}
