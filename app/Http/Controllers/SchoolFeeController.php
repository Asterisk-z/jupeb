<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\PaymentReferemce;
use App\Services\Api\InvoiceNotification;
use RealRashid\SweetAlert\Facades\Alert;

class SchoolFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.schoolfee.index');
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
    public function invoice()
    {
        return view('front.schoolfee.main');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'email' => 'required',
            'acceptanceInvoiceNumber' => 'required',
        ]);


        $payment = PaymentReferemce::where('acceptance_invoice', $data['acceptanceInvoiceNumber'])->firstOrFail();
        $student = $payment->student;

        if ($payment->acceptance_status == 'PENDING') {
            Alert::error('Acceptance Fee Error', 'Please Pay Acceptance Fee First..');
            return redirect()->back();
        }

        InvoiceNotification::post($payment->schoolFee_invoice, $student->email, 'SCHOOLFEE', $student->firstName, $student->lastName, $payment->schoolFee_amount);

        return view('front.schoolfee.invoice', compact('payment', 'student'));
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
