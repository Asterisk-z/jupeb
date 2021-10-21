@extends('layouts.front')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10  pt-md-14 pb-14 pb-md-10">
            <div class="row gx-md-8 gx-lg-12 gy-3 gy-lg-0 mb-13">
                <div class="col-lg-6">
                    <h1 class="display-1 fs-45 lh-xs mb-0">Easy Way to skip the jamb stress and headstart into 200 Level.
                    </h1>
                </div>
                <!-- /column -->
                <div class="col-lg-6">
                    <p class="lead fs-25 my-3">JUPEB is a national examination body approved by the federal government of
                        Nigeria</p>

                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light angled upper-end">
        <div class="container pb-11">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <h2 class="display-4 mb-3 text-center">Provide your Registeration Invoice Number</h2>
                    <p class="lead text-center mb-10"></p>
                    <form class="" method="post" action="{{ route('complete.apply.student') }}">
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
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


@endsection

@section('title')
    Complete Registeration -
@endsection

@section('style')

@endsection

@section('script')

@endsection
