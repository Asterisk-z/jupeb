@extends('layouts.back')

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box bg-gradient-primary overflow-hidden pull-up">
                            <div class="box-body pe-0 ps-lg-50 ps-15 py-0">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-8">
                                        <h1 class="fs-40 text-white">Welcome Admin!</h1>
                                        <p class="text-white mb-0 fs-20">
                                            Education is the passport to the future, So learn more & more
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-4"><img src="{{ asset('img/custom-15.svg') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box bg-primary bg-hover-primary pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                        <span class="text-white icon-Mail fs-40"></span>
                                    </div>
                                    <div class="ms-10">
                                        <h4 class="text-white mb-0">{{ $appliedStudent }}</h4>
                                        <h5 class="text-white-50 mb-0">Applyed Students</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box bg-danger bg-hover-danger pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                        <span class="text-white icon-Cart2 fs-40"><span class="path1"></span><span
                                                class="path2"></span></span>
                                    </div>
                                    <div class="ms-10">
                                        <h4 class="text-white mb-0">{{ $registedStudent }}</h4>
                                        <h5 class="text-white-50 mb-0">Registered Students</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box bg-success bg-hover-success pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                        <span class="text-white icon-Pen-tool-vector fs-40"><span
                                                class="path1"></span><span class="path2"></span></span>
                                    </div>
                                    <div class="ms-10">
                                        <h4 class="text-white mb-0">{{ $admittedStudent }}</h4>
                                        <h5 class="text-white-50 mb-0">Offered Admission</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box bg-default bg-hover-default pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                        <span class="text-white icon-Pen-tool-vector fs-40"><span
                                                class="path1"></span><span class="path2"></span></span>
                                    </div>
                                    <div class="ms-10">
                                        <h4 class="text-white mb-0">{{ number_format($applicationFee) }}</h4>
                                        <h5 class="text-white-50 mb-0">Total Registration Fee</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box bg-secondary bg-hover-secondary pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                        <span class="text-white icon-Pen-tool-vector fs-40"><span
                                                class="path1"></span><span class="path2"></span></span>
                                    </div>
                                    <div class="ms-10">
                                        <h4 class="text-white mb-0">{{ number_format($acceptanceFee) }}</h4>
                                        <h5 class="text-white-50 mb-0">Total Acceptance Fee</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box bg-info bg-hover-info pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                        <span class="text-white icon-Pen-tool-vector fs-40"><span
                                                class="path1"></span><span class="path2"></span></span>
                                    </div>
                                    <div class="ms-10">
                                        <h4 class="text-white mb-0">{{ number_format($schoolFee) }}</h4>
                                        <h5 class="text-white-50 mb-0">Total School Fee</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
