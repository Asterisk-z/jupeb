<?php
namespace App\Services\Api;

use Illuminate\Support\Facades\Http;
use App\Models\Student;
use App\Models\PaymentReferemce;
use App\Models\PaymentNotification as Notification;

Class PaymentNotifcation {


    public static function addToDatabase($data) {


        try {
            $payment = Notification::firstOrCreate(['custReference' => $data['CustReference'],
                        'serviceUrl' =>    '0',
                        'productGroupCode' =>  null,
                        'paymentLogId' =>  $data['PaymentLogId'],
                        'custReference' =>     $data['CustReference'],
                        'amount' =>    $data['Amount'],
                        'paymentStatus' =>     $data['PaymentStatus'],
                        'paymentMethod' =>     $data['PaymentMethod'],
                        'paymentReference' =>  $data['PaymentReference'],
                        'channelName' =>   $data['ChannelName'],
                        'isReversal' =>    $data['IsReversal'],
                        'paymentDate' =>   $data['PaymentDate'],
                        'settlementDate' =>    $data['SettlementDate'],
                        'institutionId' =>     $data['InstitutionId'],
                        'institutionName' =>   $data['InstitutionName'],
                        'customerName' =>  $data['CustomerName'],
                        'receiptNo' =>     $data['ReceiptNo'],
                        'itemName' =>  $data['PaymentItems']['PaymentItem']['ItemName'],
                        'itemCode' =>  $data['PaymentItems']['PaymentItem']['ItemCode'],
                        'itemAmount' =>    $data['PaymentItems']['PaymentItem']['ItemAmount'],
                        'paymentCurrency' =>   $data['PaymentCurrency'],
                ]);
        } catch (\Throwable $th) {

            return self::failed($data['CustReference']);

        }


        return self::success($payment->paymentLogId);


    }

	public static function success($paymentLogId) {

		$config = [
                'template' => '<PaymentNotificationResponse></PaymentNotificationResponse>'
            ];

        $response = [
                        'Payments' => [
                            'Payment' => [
                                'PaymentLogId' => $paymentLogId,
                                'Status' => '0',
                            ]
                        ]
                    ];

        return response()->xml($response, 201, $config)->header('Content-Type', 'text/xml')->getContent();

	}

	public static function failed($paymentLogId) {

		$config = [
                'template' => '<PaymentNotificationResponse></PaymentNotificationResponse>'
            ];

        $response = [
                        'Payments' => [
                            'Payment' => [
                                'PaymentLogId' => $paymentLogId,
                                'Status' => '1',
                            ]
                        ]
                    ];


        return response()->xml($response, 201, $config)->header('Content-Type', 'text/xml')->getContent();

	}



}
