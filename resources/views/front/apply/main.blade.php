@extends('layouts.front')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-12 pt-md-10 pb-md-10 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <h1 class="display-1 mb-3">Unical Jupeb Application </h1>
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
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="classic-view  text-center">
                                <article class="post">
                                    <div class="post-content mb-5">
                                        <h2 class="h1 mb-4">Apply for JUPEB</h2>
                                        <p>Application Require a Fee of 15,000 only</p>
                                        <p></p>
                                        <a href="{{ route('apply') }}"
                                            class="btn btn-success btn-sm text-white text-uppercase">Apply</a>
                                    </div>
                                </article>
                                <!-- /.post -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="classic-view  text-center">
                                <article class="post">
                                    <div class="post-content mb-5">
                                        <h2 class="h1 mb-4">Print Invoice</h2>
                                        <p>Print Registeration Invoice when you have paid</p>
                                        <p></p>
                                        <a href="{{ route('get.apply.invoice') }}"
                                            class="btn btn-success btn-sm text-white text-uppercase">Click
                                            Here</a>
                                    </div>
                                </article>
                                <!-- /.post -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="classic-view  text-center">
                                <article class="post">
                                    <div class="post-content mb-5">
                                        <h2 class="h1 mb-4">Complete Registration</h2>
                                        <p>After Payment Has Been Confirmed can complete your registration by clicking</p>
                                        <p></p>
                                        <a href="{{ route('complete.apply') }}"
                                            class="btn btn-success btn-sm text-white text-uppercase">Check</a>
                                    </div>
                                </article>
                                <!-- /.post -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
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
