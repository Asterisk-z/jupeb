@extends('layouts.front')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-12 pt-md-10 pb-md-10 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <h1 class="display-1 mb-3"> Registeration Complete</h1>
                    <p class="lead px-xxl-10"></p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


    <div class="container">
      <div class="row">
        <aside class="col-xl-2 sidebar doc-sidebar mt-md-0 py-16 d-none d-xl-block">
          
        </aside>
        <!-- /column -->
        <aside class="col-xl-2 order-xl-3 sidebar sticky-sidebar mt-md-0 py-16 d-none d-xl-block">
          
        </aside>
        <!-- /column -->
        <div class="col-xl-8 order-xl-2">
          <section id="snippet-1" class="wrapper pt-16">
            <h2 class="mb-5 text-uppercase">{{ $student->lastName. ' '.$student->firstName. ' '.$student->middleName  }}</h2>
            {{-- <img src="{{ asset('images/upoad/.$stud') }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> --}}
            <div class="card">
                <div class="card-body">
                    <p>Email : {{ $student->email }}</p>
                    <p>Programme : {{ $student->programme }}</p>
                    <p>Course : {{ $student->course }}</p>
                    <p>Session : {{ $student->session }}</p>
                    <p>Marital Status : {{ $student->email }}</p>
                    <p>Address : {{ $student->contactAddress }}</p>
                    <p>Nationaity : {{ $student->nationality }}</p>
                    <p>State : {{ $student->state }}</p>
                    <p>LGA : {{ $student->lga }}</p>
                </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </section>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>

@endsection

@section('title')
    Complete Registeration -
@endsection

@section('style')

@endsection

@section('script')

@endsection
