<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentReferemce;
use App\Services\Api\CustomerValidation;
use App\Services\Api\PaymentNotifcation;

class PaymentController extends Controller
{
        public function notify(Request $request) {

            $xml = simplexml_load_string($request->getContent(), "SimpleXMLElement", LIBXML_NOCDATA);
            $json = json_encode($xml);
            $data = json_decode($json, TRUE);

            // CUSTOMER  VERIFICATION

            if (isset($data['MerchantReference'])) {

                $paymentCode = $data['PaymentItemCode'];
                $invoiceNumber = $data['CustReference'];

                $response = CustomerValidation::check($paymentCode, $invoiceNumber);
                header('Content-Type', 'text/xml');
                return $response;

            }


            // PAYMENT NOTIFICATION

            if (isset($data['Payments']['Payment'])) {
                # code...
                return PaymentNotifcation::addToDatabase($data['Payments']['Payment']);
            }

            return null;



    }

}
