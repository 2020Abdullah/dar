<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentExits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentExitsController extends Controller
{
    public function create()
    {
        $students = Student::where([
            ['ecape_yes', 0],
            ['exit_yes', 0],
        ])->get();
        return view('exits.Add', compact('students'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'st_Name' => 'required',
        ]);
        // update students table
        $student = Student::find($request->st_Name);
        $student->exit_yes = 1;
        $student->update();
        // Insert Data
        StudentExits::insertOrIgnore([
            'student_id' => $request->st_Name,
            'exit_date' => $request->date_exit,
            'exit_reason' => $request->exit_reason,
        ]);
        $student->save();
        return back()->with('Add', 'تم تسجيل خروج الحالة بنجاح');
    }
    public function index()
    {
        $exit = StudentExits::join('students', 'student_exits.student_id', '=', 'students.id')->paginate(10);
        return view('exits.index', compact('exit'));
    }
    public function show(request $request, $id)
    {
        $student = StudentExits::join('students', 'student_exits.student_id', '=', 'students.id')->where('student_id', $id)->first();
        return view('exits.show', compact('student'));
    }
    public function destory(request $request)
    {
        $student_id = $request->student_id;
        $student = StudentExits::join('students', 'student_exits.student_id', '=', 'students.id')->where('student_id', $student_id);
        $student->update([
            'exit_yes' => 0
        ]);
        $student->delete();
        Session::flash('del', 'تم حذف الحالة ونقلها إلي سجل القيد العام');
        return back();
    }
    // Search data table
    public function Search(request $request)
    {
        $request->validate([
            'q' => 'required'
        ]);

        $q = $request->q;

        $exit =  StudentExits::where('Name', 'like', '%' . $q . '%')->orwhere('code', 'like', '%' . $q . '%')->join('students', 'student_exits.student_id', '=', 'students.id')->paginate(10);

        if($exit->count()){

            return view('exits.index', ['exit' => $exit]);

        } else {

            return redirect('exits.index')->with('faild', 'فشل البحث ...');
        }

    }
}
