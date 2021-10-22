<?php
namespace App\Services\Api;

use Illuminate\Support\Facades\Http;

Class InvoiceNotification {


    public static function post($referenceNumber, $email, $description, $firstName, $lastName, $amount) {

            $response = Http::withBody(
                '{
                    "ReferenceNumber" : "'.$referenceNumber.'",
                    "email" : "'.$email.'",
                    "location" : "",
                    "MerchantId" : "'.config('app.MerchantReference').'",
                    "ServiceNumber" : "",
                    "Description" : "'.$description.'",
                    "Amount" : "'.$amount.'",
                    "DateBooked" : "'.now().'",
                    "DateExpired" : "'.now()->addMonths(2).'",
                    "FirstName" : "'.$firstName.'",
                    "LastName" : "'.$lastName.'",
                    "Status" : "",
                    "PaymentStatus":"",
                    "ChannelName" : "",
                    "TerminalId" : "",
                    "PaymentDate" : "",
                    "PaymentMethod" : "",
                    "ItemCode" : "'.$description.'",
                    "jamb_matric" : "000000"
                }','application/json'
            )->post('https://paymentapi.myunicalportal.net/invoice');

            if($response->successful()) {

                return $response->json();

            };

    }

}
