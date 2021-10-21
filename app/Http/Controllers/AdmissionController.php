<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompleteApplicationRequest;
use App\Models\PaymentReferemce;
use App\Models\Student;
use App\Services\NumberGenerator;
use RealRashid\SweetAlert\Facades\Alert;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.admission.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function status()
    {
         return view('front.admission.status');
    }
    
    public function acceptance()
    {
         return view('front.admission.status');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function statusCheck(Request $request)
    {
        //
        $data = $request->validate([
            'invoiceNumber' => 'required|exists:payment_referemces,registration_invoice',
        ]);
        $payment = PaymentReferemce::where('registration_invoice', $data['invoiceNumber'])->firstOrFail();
        $student = $payment->student;

        if ($student->admissionStatus == 0) {
           Alert::error('Admission Processing', 'You have not been given admission');
            return redirect()->back();
        }
            // Alert::success('Admission', 'You have not been given admission');
            alert()->html('Admission', "You have been offered admission, proceed with payment of acceptance fee ",'success');
            return redirect(route('admission.main'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invoice(Request $request)
    {

        $data = $request->validate([
            'invoiceNumber' => 'required|exists:payment_referemces,registration_invoice',
        ]);
        $payment = PaymentReferemce::where('registration_invoice', $data['invoiceNumber'])->firstOrFail();
        $student = $payment->student;

        if ($student->admissionStatus == 0) {
           Alert::error('Admission Processing', 'You have not been given admission');
            return redirect()->back();
        }

        // alert()->success('Success','Update SuccessFul! Please ensure not to submit twice');

        return view('front.admission.invoice', compact('student', 'payment'));
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
