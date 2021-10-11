@extends('layouts.front')

@section('content')
    <section class="wrapper bg-soft-primary  d-print-none">
        <div class="container pt-10 pb-12 pt-md-10 pb-md-10 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <h1 class="display-1 mb-3">Invoice</h1>
                    <p class="lead px-xxl-10">Print and take the invoice to any bank branch to pay registeration fee</p>
                </div>
            <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-light">
        <div class="container pb-11">
            <!-- /.row -->
            <div class="row">

                <div class="col-12">
                    <div class="card p-3 border-5">
                        <div class="card p-3" id="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset('images/logo/unical.png') }}" width="100" height="100" alt="" sizes="20" srcset="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-center">
                                            <h1 class="text-uppercase text-primary ">university of calabar</h1>
                                            <h6 class="text-uppercase text-danger">p.m.b 1115, calabar, cross river state, nigeria</h6>
                                            <h6 class="text-uppercase text-default">joint university preliminary examinations board</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ asset('images/logo/jupeb.png') }}" width="100" height="100" alt="" sizes="20" srcset="">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row pl-5 pr-5">

                                    <div class="col-md-9">
                                        @if ($registeration['status'] == 'PAID')
                                            <span class="badge bg-green rounded-pill text-uppercase">Paid</span>
                                            <small>AWAITING APPROVAL</small>
                                        @else
                                            <span class="badge bg-red rounded-pill text-uppercase">Not Paid</span>
                                        @endif

                                    </div>

                                    <div class="col-md-3 float-right">
                                        <p class="ml-2"></p>
                                        <p class="ml-2 pull-right">{{ now()->format('jS \\of F Y') }}</p>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <h4 class="text-uppercase text-center">{{ $student->lastName }} {{ $student->firstName }} {{ $student->middleName  }}</h4>
                                    </div>

                                </div>

                                <div class="row pl-5 pr-5 pt-3">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Invoice Number</th>
                                                    <th scope="col">Item Description</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Method </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $registeration['invoice_number']  }}</td>
                                                    <td>{{ __('JUPEB REGISTRATION FEE') }}</td>
                                                    <td>{{ 'NGN'. number_format(15500)  }}</td>
                                                    <td>{{ __('Bank Branch') }}</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <a href="#" onclick="window.print('#card');" class="btn btn-success float-right d-print-none">Print</a>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


@endsection

@section('title')
Registeration Invoice -
@endsection

@section('style')

@endsection

@section('script')

@endsection


