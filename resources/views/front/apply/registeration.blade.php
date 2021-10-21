@extends('layouts.front')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-12 pt-md-10 pb-md-10 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <h1 class="display-1 mb-3">Complete Registeration</h1>
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
                        <form class="" method="post" action="{{ route('complete.apply.store') }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="row gx-4">

                                <div class="col-md-4">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="firstName" class="form-control" placeholder="First Name" required value="{{ $student->firstName }}" readonly>
                                        <label for="form_name">First Name</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="text" name="lastName" class="form-control" placeholder="Last Name" required value="{{ $student->lastName }}" readonly>
                                        <label for="form_lastname">Last Name</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-floating mb-4">
                                        <input id="form_middlename" type="text" name="middleName" class="form-control" placeholder="Middle Name" required value="{{ $student->middleName }}" readonly>
                                        <label for="form_middename">Middle Name</label>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_phone" type="text" name="phoneNumber" class="form-control" placeholder="Phone Number" required value="{{ $student->phoneNumber }}" readonly>
                                        <label for="form_phone">Phone Number</label>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter Email Address" required value="{{ $student->email }}" readonly>
                                        <label for="form_email">Email</label>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input  id="form_programme"  type="text" name="programme" class="form-control"  required value="{{ $student->programme }}" readonly>
                                        <label for="form_programme">Programme</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input  id="form_course"  type="text" name="course" class="form-control"  required value="{{ $student->course }}" readonly>
                                        <label for="form_course">Course</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-marital" required name="maritalStatus">
                                            <option selected disabled value="">Select Marital Status</option>
                                            <option value="single" >Single</option>
                                            <option value="married" >Married</option>
                                            <option value="divorced" >Divorced</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-4">
                                        <select class="form-select" id="form-marital" required name="gender">
                                            <option selected disabled value="">Select Gender</option>
                                            <option value="male" >Male</option>
                                            <option value="female" >Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-4">
                                        <input id="form_dob" type="date" name="dob" class="form-control" required>
                                        <label for="form_dob">Date Of Birth</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="form_passport" type="file" name="passport" class="form-control" required  accept="image/*">
                                        <label for="form_passport">Passport</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4>Residential Detail</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="form_address" type="text" name="contactAddress" class="form-control" required >
                                        <label for="form_address">Contact Address</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-4">
                                        <input id="form_nationality" type="text" name="nationality" class="form-control" required >
                                        <label for="form_nationality">Nationality</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-4">
                                        <select class="form-select" id="form-marital" class="form-control" required name="state">
                                            <option selected disabled value="">Select State Of Origin</option>
                                            <option value="Abuja FCT">Abuja FCT</option>
                                            <option value="Abia">Abia</option>
                                            <option value="Adamawa">Adamawa</option>
                                            <option value="Akwa Ibom">Akwa Ibom</option>
                                            <option value="Anambra">Anambra</option>
                                            <option value="Bauchi">Bauchi</option>
                                            <option value="Bayelsa">Bayelsa</option>
                                            <option value="Benue">Benue</option>
                                            <option value="Borno">Borno</option>
                                            <option value="Cross River">Cross River</option>
                                            <option value="Delta">Delta</option>
                                            <option value="Ebonyi">Ebonyi</option>
                                            <option value="Edo">Edo</option>
                                            <option value="Ekiti">Ekiti</option>
                                            <option value="Enugu">Enugu</option>
                                            <option value="Gombe">Gombe</option>
                                            <option value="Imo">Imo</option>
                                            <option value="Jigawa">Jigawa</option>
                                            <option value="Kaduna">Kaduna</option>
                                            <option value="Kano">Kano</option>
                                            <option value="Katsina">Katsina</option>
                                            <option value="Kebbi">Kebbi</option>
                                            <option value="Kogi">Kogi</option>
                                            <option value="Kwara">Kwara</option>
                                            <option value="Lagos">Lagos</option>
                                            <option value="Nassarawa">Nassarawa</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Ogun">Ogun</option>
                                            <option value="Ondo">Ondo</option>
                                            <option value="Osun">Osun</option>
                                            <option value="Oyo">Oyo</option>
                                            <option value="Plateau">Plateau</option>
                                            <option value="Rivers">Rivers</option>
                                            <option value="Sokoto">Sokoto</option>
                                            <option value="Taraba">Taraba</option>
                                            <option value="Yobe">Yobe</option>
                                            <option value="Zamfara">Zamfara</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-4">
                                        <input id="form_lga" type="text" name="lga" class="form-control" required >
                                        <label for="form_lga">Local Government Area</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4>Next of Kin</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_nok_fullname" type="text" name="nextOfKinFullName" class="form-control" required >
                                        <label for="form_nok_fullname">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_nok_fullname" type="text" name="nextOfKinRelationship" class="form-control" required >
                                        <label for="form_nok_fullname">Relationship</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_nok_fullname" type="text" name="nextOfKinAddress" class="form-control" required >
                                        <label for="form_nok_fullname">Address</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_nok_fullname" type="text" name="nextOfKinPhoneNumber" class="form-control" required >
                                        <label for="form_nok_fullname">Phone number</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4>Educational And Profesional</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_session" type="text" name="session" class="form-control" required value="{{ $student->session }}" readonly >
                                        <label for="form_session">Session</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="form_jamb" type="file" name="jamb" class="form-control" required  accept="image/*">
                                        <label for="form_jamb">Jamb Result</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="form_wace" type="file" name="wace" class="form-control" required  accept="image/*">
                                        <label for="form_wace">O Level Certificate</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="form_neco" type="file" name="otherResult" class="form-control"  accept="image/*">
                                        <label for="form_neco">O Level Certificate (optional)</label>
                                    </div>
                                </div>

                                <!-- /column -->
                                <div class="col-12 text-center">
                                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Update">
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


