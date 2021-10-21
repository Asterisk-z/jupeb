@extends('layouts.front')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-12 pt-md-10 pb-md-10 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <h1 class="display-1 mb-3">Unical Jupeb Admission Portal </h1>
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
                                <div class="classic-view text-center">
                                    <article class="post">
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">Admission Status</h2>
                                            <p>Check if you have been offered provisional Admision in to your desired JUPEB programme</p>
                                            <p></p>
                                            <a href="{{ route('admission.status') }}" class="btn btn-success btn-sm text-white">Check</a>
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
                                <div class="classic-view text-center">
                                    <article class="post">
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">Acceptance Fee Invoice</h2>
                                            <p>Click the button below to print invoice to a make payment</p>
                                            <p></p>
                                            <a href="{{ route('admission.acceptance') }}" class="btn btn-success btn-sm text-white">Invoice</a>
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
                                <div class="classic-view text-center">
                                    <article class="post">
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">Print School Fee Break Down</h2>
                                            <p></p>
                                            <p></p>
                                            <a href="{{ route('admission.breakdown') }}" class="btn btn-success btn-sm text-white">Print</a>
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


