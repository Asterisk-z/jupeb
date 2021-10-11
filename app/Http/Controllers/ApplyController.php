<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyRequest;
use App\Models\PaymentReferemce;
use Illuminate\Http\Request;
use App\Models\Student;
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
    public function store(ApplyRequest $request)
    {
        $data = $request->validated();


        $student = Student::firstOrCreate(
                ['email' => $data['email']],
                 $data,
                );

        $registeration = [
                'invoice_number' => 'JUPEB|REG|'.NumberGenerator::registerationNumber(),
                'status' => 'PENDING'
            ];

        $acceptance = [
                'invoice_number' => 'JUPEB|ACCFEE|'.NumberGenerator::acceptanceNumber(),
                'status' => 'PENDING'
            ];

        $schoolFee = [
                'invoice_number' => 'JUPEB|SCHFEE|'.NumberGenerator::schoolFeeNumber(),
                'status' => 'PENDING'
            ];

        $paymentRef = PaymentReferemce::firstOrCreate(
            ['student_id' => $student->id],
            [
                'registration' => serialize($registeration),
                'acceptance' => serialize($acceptance),
                'schoolFee' => serialize($schoolFee),
            ]);


        return view('front.apply.registerationInvoice', compact('student', 'registeration'));


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
