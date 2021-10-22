<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyRequest;
use App\Models\PaymentReferemce;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Services\Api\InvoiceNotification;
use App\Services\NumberGenerator;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.apply.main');
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
    public function store(ApplyRequest $request)
    {
        $data = $request->validated();


        $student = Student::firstOrCreate(
                ['email' => $data['email']],
                 $data,
                );

        $student_type = ($student->programme == 'science') ? 'SCI' : 'NONSCI' ;
        $amount = ($student->programme == 'science') ? '200000' : '195000' ;

        $payment = PaymentReferemce::firstOrCreate(
            ['student_id' => $student->id],
            [
                'registration_invoice' => 'JUPEB/REG/'.NumberGenerator::registerationNumber(),
                'registration_status' => 'PENDING',
                'registration_amount' => '15500',
                'acceptance_invoice' => 'JUPEB/ACCFE/'.NumberGenerator::acceptanceNumber(),
                'acceptance_status' => 'PENDING',
                'acceptance_amount' => '10500',
                'schoolFee_invoice' => 'JUPEB/SCHFEE/'.$student_type.'/'.NumberGenerator::schoolFeeNumber(),
                'schoolFee_status' => 'PENDING',
                'schoolFee_amount' => $amount,
            ]);

        InvoiceNotification::post($payment->registration_invoice, $student->email, 'REGISTERATIONFEE', $student->firstName, $student->lastName, $payment->registration_amount);


        return view('front.apply.registerationInvoice', compact('student', 'payment'));


    }

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
