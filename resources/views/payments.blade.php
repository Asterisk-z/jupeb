@extends('layouts.back')

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="btn-group">
                                <a href="{{ route('payments.registeration') }}"  class="waves-effect waves-light btn btn-info">Registeration Payments Only</a>
                                <a href="{{ route('payments.acceptance') }}"  class="waves-effect waves-light btn btn-primary">Acceptance Payments Only</a>
                                <a href="{{ route('payments.schoolfee') }}"  class="waves-effect waves-light btn btn-success">School Fee Payments Only</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">{{ $data }}</h3>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Refrence Number</th>
                                            <th>Payed For</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($payments as $payment)
                                            <tr>
                                                <td>{{ $payment->customerName }}</td>
                                                <td>{{ $payment->custReference }}</td>
                                                <td>{{ $payment->itemName }}</td>
                                                <td>{{ $payment->amount }}</td>
                                                <td>
                                                    <span class="badge badge-pill text-uppercase badge-success">
                                                        PAID
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>				  
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Refrence Number</th>
                                            <th>Payed For</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                </div>              
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection

@section('script')
	<script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
	
	<!-- EduAdmin App -->
	<script src={{ asset('js/template.js') }}"></script>
	
	<script src="{{ asset('js/pages/data-table.js') }}"></script>

@endsection

@section('title')

Payments

@endsection