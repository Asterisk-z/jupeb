<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Alert;

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = 'List Of All Students';
        $students = Student::orderBy('created_at', 'ASC')->get();
        return view('students', compact('students', 'data'));
    }
    public function registered()
    {
        $data = 'List Of Student Completed Registeration';
        $students = Student::where('registerationStatus', '1')->orderBy('created_at', 'ASC')->get();
        return view('students', compact('students', 'data'));
    }
    public function admission()
    {
        $data = 'List Of Students Offered Admission';
        $students = Student::where('admissionStatus', '1')->orderBy('created_at', 'ASC')->get();
        return view('students', compact('students', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function student(Student $student)
    {
        return view('student', compact('student'));
    }

    public function offer(Student $student)
    {

        $update = $student->update(['admissionStatus' => '1']);

        Alert::success('Success', 'Student Offered Admission');
        return redirect(route('students.admission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
