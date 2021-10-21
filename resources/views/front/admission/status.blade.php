@extends('layouts.front')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-12 pt-md-10 pb-md-10 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <h1 class="display-1 mb-3">Unical Jupeb Acceptance Fee Portal </h1>
                    <p class="lead px-xxl-10"></p>
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
                    <h2 class="display-4 mb-3 text-center">Provide your Registeration Invoice Number</h2>
                    <p class="lead text-center mb-10"></p>
                    <form class="" method="post" action="{{ route('admission.acceptance.invoice') }}">
                        @csrf
                        @include('inc.frontMessage')
                        <div class="messages"></div>
                        <div class="row gx-4">

                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="invoiceNumber" class="form-control"
                                        placeholder="Registeration Invoice " required>
                                    <label for="form_name">Registeration Invoice </label>
                                </div>
                            </div>

                            <!-- /column -->
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Continue">
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </form>
                    <!-- /form -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

@endsection

@section('title')
Check Admission -
@endsection

@section('style')

@endsection

@section('script')

@endsection


