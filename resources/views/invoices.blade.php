@extends('layouts.back')

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">{{ $data }}</h3>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Registeration Invoice</th>
                                                <th>Acceptance Invoice</th>
                                                <th>School Fee Invoice</th>
                                                {{-- <th>Status</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($invoices as $invoice)
                                                <tr>
                                                    <td>{{ ucfirst($invoice->student->lastName) . ' ' . ucfirst($invoice->student->firstName) }}
                                                    </td>
                                                    <td>
                                                        {{ $invoice->registration_invoice }}
                                                        <span
                                                            class="badge badge-pill text-uppercase {{ $invoice->registration_status == 'PENDING' ? 'badge-danger' : 'badge-success' }}">
                                                            {{ $invoice->registration_status == 'PENDING' ? 'NotPAID' : 'PAID' }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        {{ $invoice->acceptance_invoice }}
                                                        <span
                                                            class="badge badge-pill text-uppercase {{ $invoice->acceptance_status == 'PENDING' ? 'badge-danger' : 'badge-success' }}">
                                                            {{ $invoice->acceptance_status == 'PENDING' ? 'NotPAID' : 'PAID' }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        {{ $invoice->schoolFee_invoice }}
                                                        <span
                                                            class="badge badge-pill text-uppercase {{ $invoice->schoolFee_status == 'PENDING' ? 'badge-danger' : 'badge-success' }}">
                                                            {{ $invoice->schoolFee_status == 'PENDING' ? 'NotPAID' : 'PAID' }}
                                                        </span>
                                                    </td>
                                                    {{-- <td>
                                                    <span class="badge badge-pill text-uppercase badge-success">
                                                        PAID
                                                    </span>
                                                </td> --}}
                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Registeration Invoice</th>
                                                <th>Acceptance Invoice</th>
                                                <th>School Fee Invoice</th>
                                                {{-- <th>Status</th> --}}
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
