<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use App\Bestellingen;
use App\ProductInBestelling;
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
        $bestelling = new Bestellingen();
        $bestelling->naam           = $request->input('naam');
        $bestelling->totaalPrijs    = $request->input('totaalPrijs');
        $bestelling->status         = "In behandeling";

        $data = $request->all();
        $producten_ar = explode(',',$data['producten']);
        $aantal_ar = explode(',',$data['aantal']);
        $result = array_combine($producten_ar,$aantal_ar);

        // foreach ($result as $producten_ar) {
        //     $product = new ProductInBestelling();
        //     $product->product_id = $prod;
        //     dd($product->product_id);
        // }

        try {
            $bestelling->save();
            // dd("De bestelling is succesvol opgeslagen");
        } catch (\Throwable $th) {
            dd($th);
        }

        foreach ($result as $key => $test) {
            $product = new ProductInBestelling();
            $product->product_id    = $key;
            $product->aantal        = $test;
            $product->bestel_id     = "1";

            try {
                $product->save();
            } catch (\Throwable $th) {
                dd($th);
            }
        }

        return "De bestelling is gelukt!";
        // return redirect()->route('checkout.get');
    }
}
