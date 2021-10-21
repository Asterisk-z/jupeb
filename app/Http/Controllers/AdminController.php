<?php

namespace App\Http\Controllers;

use App\Models\PaymentNotification;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appliedStudent = Student::count();
        $registedStudent = Student::where('registerationStatus', '1')->count();
        $admittedStudent = Student::where('admissionStatus', '1')->count();

        $applicationFee = PaymentNotification::where('itemName', 'REGISTERATIONFEE')->sum('amount');
        $acceptanceFee = PaymentNotification::where('itemName', 'ACCEPTANCEFEE')->sum('amount');
        $schoolFee = PaymentNotification::where('itemName', 'SCIENCESCHOOLFEE')->sum('amount') + PaymentNotification::where('itemName', 'NONSCIENCESCHOOLFEE')->sum('amount');


        return view('dashboard', compact('appliedStudent', 'registedStudent', 'admittedStudent', 'applicationFee', 'acceptanceFee', 'schoolFee', ));
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
    public function store(Request $request)
    {
        //
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
