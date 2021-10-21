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
                    <p class="lead fs-25 my-3">If you have filled the form below and have made payment click the button below
                        to complete registeration process.</p>
                    <a href="{{ route('complete.apply') }}" class="btn btn-success rounded">Proceed</a>
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
                    <h2 class="display-4 mb-3 text-center">Fill The Form With the appropiate Information</h2>
                    <p class="lead text-center mb-10">After Filing it out a invoice will be generated for you to pay the
                        registeration fee</p>
                    <form class="" method="post" action="{{ route('apply.store') }}">
                        @csrf
                        @include('inc.frontMessage')
                        <div class="messages"></div>
                        <div class="row gx-4">

                            <div class="col-md-4">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="firstName" class="form-control"
                                        placeholder="First Name" required>
                                    <label for="form_name">First Name</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating mb-4">
                                    <input id="form_lastname" type="text" name="lastName" class="form-control"
                                        placeholder="Last Name" required>
                                    <label for="form_lastname">Last Name</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating mb-4">
                                    <input id="form_middlename" type="text" name="middleName" class="form-control"
                                        placeholder="Middle Name" required>
                                    <label for="form_middename">Middle Name</label>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_phone" type="text" name="phoneNumber" class="form-control"
                                        placeholder="Phone Number" required>
                                    <label for="form_phone">Phone Number</label>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_email" type="email" name="email" class="form-control"
                                        placeholder="Enter Email Address" required>
                                    <label for="form_email">Email</label>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-12">
                                <div class="form-select-wrapper mb-4">
                                    <select class="form-select" id="form-programme" required name="programme">
                                        <option selected disabled value="">Select Programme</option>
                                        <option value="science">Science</option>
                                        <option value="social">Social/Management Science</option>
                                        <option value="art">Art/Humanities</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-select-wrapper mb-4">
                                    <select class="form-select" id="form-course" required name="course">
                                        <option selected disabled value="">Select Course</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Submits">
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
    Registeration -
@endsection

@section('style')

@endsection

@section('script')
    <script>
        var science = ['Agricultural-Science/Biology/Chemistry', 'Physics/Chemistry/Mathematics',
            'Physics/Chemistry/Biology', 'Mathematics/Biology/Chemistry', 'Agricultural-Science/Mathematics/Economics'
        ]
        var social = ['Government/Economics/Mathematics', 'Government/Economics/Geography',
            'Literature/Economics/Government', 'Biology/Economics/Government',
            'Government/Literature-in-English/Christian-Religion-Studies',
            'Government/Christian-Religion-Studies/French', 'Business-Studies/Accounting/Geography',
            'Mathematics/Economics/Business-Studies'
        ]
        var humanity = ['History/Literature/Christian-Religious-Studies', 'Economics/History/Literature-in-English',
            'History/Christian-Religious-Studies/Music', 'Music/Literature/Christian-Religious-Studies',
            'History/French/Literature-in-English'
        ]

        $('body').on('change', '#form-programme', function() {
            if ($('#form-programme').val() === 'science') {
                console.log('science');
                $('#form-course').html("");
                science.forEach(function(item) {
                    $('#form-course').append("<option value=" + item + ">" + item + "</option>");
                });
            }
            if ($('#form-programme').val() === 'social') {
                console.log('social');
                $('#form-course').html("");
                social.forEach(function(item) {
                    $('#form-course').append("<option value=" + item + ">" + item + "</option>");
                });
            }
            if ($('#form-programme').val() === 'art') {
                console.log('humanity');
                $('#form-course').html("");
                humanity.forEach(function(item) {
                    $('#form-course').append("<option value=" + item + ">" + item + "</option>");
                });
            }
        });
    </script>
@endsection
