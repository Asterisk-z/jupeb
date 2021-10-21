<?php
namespace App\Services\Api;

use Illuminate\Support\Facades\Http;
use App\Models\Student;
use App\Models\PaymentReferemce;

Class CustomerValidation {


    public static function check($code, $invoiceNumber) {

        switch ($code) {
            case 'REGISTERATIONFEE':
                return self::registeratiom($invoiceNumber);
                break;

            case 'ACCEPTANCEFEE':
                return self::acceptance($invoiceNumber);
                break;

            case 'SCIENCESCHOOLFEE':
                return self::scienceSchooFee($invoiceNumber);
                break;

            case 'NONSCIENCESCHOOLFEE':
                return self::nonScienceSchooFee($invoiceNumber);
                break;

            default:
                return self::default($invoiceNumber);
                break;
        }



    }

	public static function registeratiom($invoiceNumber) {

        $refrence = PaymentReferemce::where('registration_invoice', $invoiceNumber)->first();

        if (!$refrence) {
            return self::failed($invoiceNumber);
        }else{
            $amount = $refrence->registration_amount;

            return self::success($refrence, $invoiceNumber, $amount);
        }



	}

	public static function acceptance($invoiceNumber) {

        $refrence = PaymentReferemce::where('acceptance_invoice', $invoiceNumber)->first();

        if (!$refrence) {
            return self::failed($invoiceNumber);
        }else{
            $amount = $refrence->acceptance_amount;

            return self::success($refrence, $invoiceNumber, $amount);
        }

	}

	public static function scienceSchooFee($invoiceNumber) {


        $refrence = PaymentReferemce::where('schoolFee_invoice', $invoiceNumber)->first();

        if (!$refrence) {
            return self::failed($invoiceNumber);
        }else{
            $amount = $refrence->schoolFee_amount;

            return self::success($refrence, $invoiceNumber, $amount);
        }

	}

	public static function nonScienceSchooFee($invoiceNumber) {


        $refrence = PaymentReferemce::where('schoolFee_invoice', $invoiceNumber)->first();

        if (!$refrence) {
            return self::failed($invoiceNumber);
        }else{
            $amount = $refrence->schoolFee_amount;

            return self::success($refrence, $invoiceNumber, $amount);
        }

	}

	public static function default($invoiceNumber) {


        return self::failed($invoiceNumber);

	}

	public static function success($refrence, $invoiceNumber, $amount) {

		$config = [
                'template' => '<CustomerInformationResponse></CustomerInformationResponse>'
            ];

        $response = [
                        'MerchantReference' => config('app.MerchantReference'),
                        'Customers' => [
                            'Customer' => [
                                'Status' => '0',
                                'CustReference' => $invoiceNumber,
                                // 'CustomerReferenceAlternate' => '',
                                'FirstName' => $refrence->student->firstName,
                                'LastName' => $refrence->student->lastName,
                                'Email' =>  $refrence->student->email,
                                'Phone' =>  $refrence->student->phoneNumber,
                                // 'ThirdPartyCode' => '',
                                'Amount' =>  $amount
                            ]
                        ]
                    ];

        return response()->xml($response, 201, $config)->header('Content-Type', 'text/xml')->getContent();

	}

	public static function failed($invoiceNumber) {

		$config = [
                'template' => '<CustomerInformationResponse></CustomerInformationResponse>'
            ];

        $response = [
                        'MerchantReference' => config('app.MerchantReference'),
                        'Customers' => [
                            'Customer' => [
                                'Status' => '1',
                                'CustReference' => $invoiceNumber,
                                'CustomerReferenceAlternate' => 'NONE',
                                'FirstName' => 'NONE',
                                'LastName' => 'NONE',
                                'Email' =>  'NONE',
                                'Phone' =>  'NONE',
                                'ThirdPartyCode' => 'NONE',
                                'Amount' =>  'NONE'
                            ]
                        ]
                    ];

        return response()->xml($response, 201, $config)->header('Content-Type', 'text/xml')->getContent();

	}


// <CustomerInformationRequest>
// 	<ServiceUrl>Https://jupeb.myunicalportal.net/api/payments/paydirect/notification</ServiceUrl>
//     <ServiceUsername></ServiceUsername>
//     <ServicePassword></ServicePassword>
//     <MerchantReference>6405</MerchantReference>
//     <CustReference>JUPEB/REG/0577697788</CustReference>
//     <PaymentItemCode>REGISTERATIONFEE</PaymentItemCode>
//     <ThirdPartyCode></ThirdPartyCode>
// </CustomerInformationRequest>
}
