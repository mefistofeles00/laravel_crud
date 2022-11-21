<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));

    }

    public function create()
    {

            return view('student.create');
    }
    public function store(Request $request)
    {
        $student = Student::create([
            'fullname'=> $request->fullname,
            'email'=> $request->email,
            'phone'=> $request->phone
        ]);

        $student->studentDetail()->create([

            'alter_phone'=> $request->alter_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no

        ]);

        return redirect('students')->with('message','Student and student details createD');

    }
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }
    public function update(Student $student, Request $request)
    {

            $student->update([

                'fullname'=> $request->fullname,
                'email'=> $request->email,
                'phone'=> $request->phone

            ]);
            $student->studentDetail()->update([

                'alter_phone'=> $request->alter_phone,
                'course' => $request->course,
                'roll_no' => $request->roll_no
            ]);

            return redirect('students')->with('message','Student and student details updateD');

    }
    public function destroy(Student $student)
    {

            $student->delete();
            return redirect('students')->with('message','Student and student details deleteD');
    }

}
