<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Student;
use App\Http\Requests\CompleteApplicationRequest;
use App\Models\PaymentReferemce;

class RegisterationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('front.apply.checkRegisteration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function student(Request $request)
    {
        //
        $data = $request->validate([
            'invoiceNumber' => 'required|exists:payment_referemces,registration_invoice',
        ]);
        $payment = PaymentReferemce::where('registration_invoice', $data['invoiceNumber'])->firstOrFail();
        $student = $payment->student;

        if($payment->registration_status == 'PENDING') {
            Alert::error('error', 'Please Pay the Registeration Fee Before Proceding');
            return redirect()->back();
        }else {
            if ($student->registerationStatus == 1) {
                Alert::success('success', 'You aready completed the registeration');
                return view('front.apply.completed', compact('student'));
            }else {
                Alert::success('success', 'Complete the registeration and await Admission');
                return view('front.apply.registeration', compact('student'));
            }
        };




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompleteApplicationRequest $request)
    {

        $data = $request->validated();

        $student = Student::where('email', $data['email'])->firstOrFail();

        $data['jamb'] = 'jamb-'.$student->id.'.'.$request->jamb->extension();
        $data['wace'] = 'wace-'.$student->id.'.'.$request->wace->extension();
        $data['passport'] = 'passport-'.$student->id.'.'.$request->passport->extension();
        if (isset($data['otherResult'])) {
            $data['otherResult'] = 'otherResult-'.$student->id.'.'.$request->otherResult->extension();
            $request->otherResult->move(public_path('images/upload/'.$request->lastName.'-'.$request->id), $data['otherResult']);
        }

        $request->wace->move(public_path('images/upload/'.$student->lastName.'-'.$student->id), $data['wace']);
        $request->jamb->move(public_path('images/upload/'.$student->lastName.'-'.$student->id), $data['jamb']);
        $request->passport->move(public_path('images/upload/'.$student->lastName.'-'.$student->id), $data['passport']);


        $data['registerationStatus'] = '1' ;

        $student = Student::updateOrCreate(['email' => $data['email']], $data);

        alert()->success('Success','Update SuccessFul! Please ensure not to submit twice');
        return view('front.apply.completed', compact('student'));
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
