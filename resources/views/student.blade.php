@extends('layouts.back')

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-img bbsr-0 bber-0"
                                style="background: url('../images/gallery/full/10.jpg') center center;" data-overlay="5">
                                <h3 class="widget-user-username text-white text-uppercase">
                                    {{ $student->lastName . ' ' . $student->firstName . ' ' . $student->middleName }}</h3>
                                <h6 class="widget-user-desc text-white">{{ $student->email }}</h6>

                                @if ($student->registerationStatus)
                                    <a href="{{ route('giveAdmission', $student->id) }}"
                                        class=" btn btn-sm btn-success mb-5"><i class="fa fa-check"></i> Offer
                                        Admission</a>
                                @endif

                            </div>
                            <div class="widget-user-image">
                                <img class="rounded-circle" src="{{ asset('images/logo/jupeb.png') }}" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive-sm">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Data</th>
                                                        <th scope="col">Infomation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>Full Name</td>
                                                        <td>{{ $student->lastName . ' ' . $student->firstName . ' ' . $student->middleName }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>Email</td>
                                                        <td>{{ $student->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>Mobile Number</td>
                                                        <td>{{ $student->phoneNumber }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>Programme</td>
                                                        <td>{{ $student->programme }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>Course</td>
                                                        <td>{{ $student->course }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>Date Registered</td>
                                                        <td>{{ $student->created_at->format('d-M-Y') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>Registeration Status</td>
                                                        <td>
                                                            <span
                                                                class="badge badge-pill text-uppercase {{ $student->registerationStatus ? 'badge-success' : 'badge-danger' }}">
                                                                {{ $student->registerationStatus ? 'Registeration Completed' : 'Incomplete Registeration' }}
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>Registeration Fee Status</td>
                                                        <td>
                                                            <span
                                                                class="badge badge-pill text-uppercase {{ $student->paymentReferemce->registration_status == 'PAID' ? 'badge-success' : 'badge-danger' }}">
                                                                {{ $student->paymentReferemce->registration_status == 'PAID' ? 'Registeration FEE PAID' : 'Registeration Fee NOT PAID' }}
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    @if ($student->registerationStatus)
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>Gender</td>
                                                            <td>{{ $student->gender }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>Martial Status</td>
                                                            <td>{{ $student->maritalStatus }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>Date Of Birth</td>
                                                            <td>{{ $student->dob }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>Contact Address</td>
                                                            <td>{{ $student->contactAddress }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>Nationality</td>
                                                            <td>{{ $student->nationality }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>Local Goverment</td>
                                                            <td>{{ $student->lga }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>Next Of Kin : Name</td>
                                                            <td>{{ $student->nextOfKinFullName }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>Next Of Kin : Relationship</td>
                                                            <td>{{ $student->nextOfKinRelationship }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>Next Of Kin : Address</td>
                                                            <td>{{ $student->nextOfKinAddress }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>Next Of Kin : Phone Number</td>
                                                            <td>{{ $student->nextOfKinPhoneNumber }}</td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>JAMB Result </td>
                                                            <td>
                                                                <a class="image-popup-vertical-fit"
                                                                    href={{ asset('images/upload/' . $student->jamb) }}"
                                                                    title="Caption. Can be aligned to any side and contain any HTML.">
                                                                    <img src="{{ asset('images/upload/' . $student->jamb) }}"
                                                                        class="img-fluid" alt="" />
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td>Waec Result </td>
                                                            <td>
                                                                <a class="image-popup-vertical-fit"
                                                                    href={{ asset('images/upload/' . $student->waec) }}"
                                                                    title="Caption. Can be aligned to any side and contain any HTML.">
                                                                    <img src="{{ asset('images/upload/' . $student->waec) }}"
                                                                        class="img-fluid" alt="" />
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @if ($student->otherResult)
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>Other Result </td>
                                                                <td>
                                                                    <a class="image-popup-vertical-fit"
                                                                        href={{ asset('images/upload/' . $student->otherResult) }}"
                                                                        title="Caption. Can be aligned to any side and contain any HTML.">
                                                                        <img src="{{ asset('images/upload/' . $student->otherResult) }}"
                                                                            class="img-fluid" alt="" />
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endif

                                                    @endif

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}">
    </script>
    <!-- EduAdmin App -->
    <script src={{ asset('js/template.js') }}"></script>

@endsection

@section('title')

    {{ ucfirst($student->firstName) }}


@endsection
