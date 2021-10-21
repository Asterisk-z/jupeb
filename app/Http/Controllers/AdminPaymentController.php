<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentNotification;

class AdminPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = 'List Of All Payment';
        $payments = PaymentNotification::orderBy('created_at', 'ASC')->get();
        return view('payments', compact('payments', 'data'));
    }

    public function registeration()
    {
        $data = 'List Of Only Registration Fee Payment';
        $payments = PaymentNotification::where('itemName', 'REGISTERATIONFEE')->orderBy('created_at', 'ASC')->get();
        return view('payments', compact('payments', 'data'));
    }

    public function acceptance()
    {
        $data = 'List Of Only Acceptance Fee Payment';
        $payments = PaymentNotification::where('itemName', 'ACCEPTANCEFEE')->orderBy('created_at', 'ASC')->get();
        return view('payments', compact('payments', 'data'));
    }

    public function schoolfee()
    {
        $data = 'List Of Only School Fee Payment';
        $payments = PaymentNotification::whereIn('itemName', ['SCIENCESCHOOLFEE', 'NONSCIENCESCHOOLFEE'])->orderBy('created_at', 'ASC')->get();
        return view('payments', compact('payments', 'data'));
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
