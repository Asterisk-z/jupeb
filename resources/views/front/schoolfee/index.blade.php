@extends('layouts.front')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-12 pt-md-10 pb-md-10 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <h1 class="display-1 mb-3">Unical Jupeb School Fee </h1>
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
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">Get School Fee Invoice</h2>
                                            <p></p>
                                            <p></p>
                                            <a href="{{ route('schoolfee.invoice') }}" class="btn btn-success btn-sm text-dark">Get Invoice</a>
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


