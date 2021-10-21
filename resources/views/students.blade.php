@extends('layouts.back')

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="btn-group">
                                <a href="{{ route('students.registed') }}"  class="waves-effect waves-light btn btn-primary">Completely Registered Student</a>
                                <a href="{{ route('students.admission') }}"  class="waves-effect waves-light btn btn-success">Student Offered Admission Only</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">{{ $data }}</h3>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Number</th>
                                            <th>Programme</th>
                                            <th>Course</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($students as $student)
                                            <tr>
                                                <td>{{ $student->lastName.' '.$student->firstName.' '.$student->middleName }}</td>
                                                <td>{{ $student->email }}</td>
                                                <td>{{ $student->phoneNumber }}</td>
                                                <td>{{ $student->programme }}</td>
                                                <td>{{ $student->course }}</td>
                                                <td>
                                                    <a href="{{ route('student', $student->id) }}" class=" btn btn-sm btn-info mb-5" ><i class="fa fa-eye"></i> View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>				  
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                </div>              
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection

@section('script')
	<script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
	
	<!-- EduAdmin App -->
	<script src={{ asset('js/template.js') }}"></script>
	
	<script src="{{ asset('js/pages/data-table.js') }}"></script>

@endsection

@section('title')
Students

@endsection