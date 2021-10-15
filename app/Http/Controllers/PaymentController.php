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



        // $config = [
        //         'template' => '<CustomerInformationResponse></CustomerInformationResponse>'
        //     ];

    	// $invoiceNumber = $request->input('invoiceNumber');
    	// $student = Student::where('InvoiceNumber', $invoiceNumber)->first();

        // if (config('app.pgPaymentStatus')) {
        //     if ($student) {
        //         if ($student->publishStatus == 1) {
                    // $response = [
                    //                 'MerchantReference' => $student->applicationNumber,
                    //                 'Customers' => [
                    //                     'Customer' => [
                    //                         'Status' => '0',
                    //                         'CustReference' => $student->invoiceNumber,
                    //                         'CustomerReferenceAlternate ' => '',
                    //                         'FirstName' => $student->fullName,
                    //                         'LastName' => '',
                    //                         'Email' =>  $student->email,
                    //                         'Phone' =>  $student->phoneNumber,
                    //                         'ThirdPartyCode' => '',
                    //                         'Amount' =>  35000,
                    //                         'ServiceUrl'=> route('user.home'),
                    //                     ]
                    //                 ]
                    //             ];
                    // return response()->xml($response, 201, $config);
        //         }
        //     }else{
        //         $response = [
        //                             'MerchantReference' => '6405',
        //                             'Customers' => [
        //                                 'Customer' => [
        //                                     'Status' => '1',
        //                                     'StatusMessage' => 'Invalid Student',
        //                                     'CustReference' => '',
        //                                     'CustomerReferenceAlternate ' => '',
        //                                     'FirstName' => '',
        //                                     'LastName' => '',
        //                                     'Email' =>  '',
        //                                     'Phone' =>  '',
        //                                     'ThirdPartyCode' => '',
        //                                     'Amount' =>  '',
        //                                     'ServiceUrl'=>  route('user.home'),
        //                                 ]
        //                             ]
        //                         ];
        //         return response()->xml($response, 404, $config);
        //     }
        // }else {
        //     $response = [
        //                     'MerchantReference' => '6405',
        //                     'Customers' => [
        //                         'Customer' => [
        //                             'Status' => '2',
        //                             'StatusMessage' => 'Expired Payment Session',
        //                             'CustReference' => '',
        //                             'CustomerReferenceAlternate ' => '',
        //                             'FirstName' => '',
        //                             'LastName' => '',
        //                             'Email' =>  '',
        //                             'Phone' =>  '',
        //                             'ThirdPartyCode' => '',
        //                             'Amount' =>  '',
        //                             'ServiceUrl'=>  route('user.home'),
        //                         ]
        //                     ]
        //                 ];
        //     return response()->xml($response, 404, $config);
        // }


    }

    public function store(Request $request)
    {


        $payment = new PaymentNotification();


        $payment->ServiceUrl = $request->input('ServiceUrl');
        $payment->Payments = $request->input('Payments');
        $payment->Payment = $request->input('Payment');
        $payment->ProductGroupCode = $request->input('ProductGroupCode');
        $payment->PaymentLogId = $request->input('PaymentLogId');
        $payment->CustReference = $request->input('CustReference');
        $payment->Amount = $request->input('Amount');;
        $payment->PaymentStatus = request('PaymentStatus');
        $payment->PaymentMethod = request('PaymentMethod');
        $payment->PaymentReference = request('PaymentReference');
        $payment->ChannelName = request('ChannelName');
        $payment->IsReversal = request('IsReversal');
        $payment->PaymentDate = request('PaymentDate');
        $payment->SettlementDate = request('SettlementDate');
        $payment->InstitutionId = request('InstitutionId');
        $payment->InstitutionName = request('InstitutionName');
        $payment->CustomerName = request('CustomerName');
        $payment->ReceiptNo = request('ReceiptNo');
        $payment->ItemName = request('ItemName');
        $payment->ItemCode = request('ItemCode');
        $payment->ItemAmount = request('ItemAmount');
        $payment->PaymentCurrency = request('PaymentCurrency');

        $data = $request->all();

        if(PaymentNotification::where('CustReference', $payment->CustReference)->exists()){
	            $response = APIResponseHelper::apiResponse(true, '07', 'Bad Request, Duplicate Customer Reference Number ', null);
	            return response()->xml($response, 400);
            }


        $payment_save = $payment->save();

        if($payment_save){
            $student = Student::where('invoiceNumber',$payment->CustReference)->first();
            $student->payStatus = '1';
            $student->save();
            return response()->xml($data, 200);
        }else{
            $response = APIResponseHelper::apiResponse(true, '07', 'Bad Request', null);
            return response()->xml($response, 400);
        }


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
