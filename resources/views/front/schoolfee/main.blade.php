@extends('layouts.front')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-12 pt-md-10 pb-md-10 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <h1 class="display-1 mb-3">Unical Jupeb School Fee </h1>
                    <p class="lead px-xxl-10">Please Provide the Your acceptance fee invoice number to generate school fee invoice</p>
                </div>
            <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


        <section class="wrapper bg-light">
            <div class="container pb-11 pt-12">
                <!-- /.row -->
                  <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        <form class="" method="post" action="{{ route('schoolfee.store') }}">
                            @csrf
                            @include('inc.frontMessage')
                            <div class="messages"></div>
                            <div class="row gx-4">

                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" value='' class="form-control border-2 border-blue" placeholder="Email" required>
                                        <label for="form_email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="acceptanceInvoiceNumber" value='' class="form-control border-2 border-blue" placeholder="Acceptance invoice Number" required>
                                        <label for="form_name">Acceptance Fee Number</label>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-12 text-center">
                                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Get School Fee Invoice">
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /form -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

@endsection

@section('title')
Main Application -
@endsection

@section('style')

@endsection

@section('script')

@endsection


