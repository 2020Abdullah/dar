<?php

namespace App\Http\Controllers;

use App\Models\Escape;
use App\Models\Student;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class EscapeController extends Controller
{
    public function index(Request $request)
    {
        $Escape = Escape::join('students', 'escapes.student_id', '=', 'students.id')->paginate(10);
        return view('ecape.index', compact('Escape'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'st_Name' => 'required',
        ]);
        // Insert Data
        Escape::insertOrIgnore([
            'student_id' => $request->st_Name,
            'date_escape' => $request->date_escape,
            'how_escape' => $request->how_escape,
            'date_back' => $request->date_back,
            'how_back' => $request->how_back,
            'number_back' => $request->number_back,
            'reason_back' => $request->reason_back,
        ]);

        // update students table
        $student = Student::findOrfail($request->st_Name);
        $student->ecape_yes = 1;
        $student->update();

        Session::flash('Add', 'تم إضافة البيانات بنجاح');
        return back();
    }
    public function create()
    {
        $students = Student::where([
            ['ecape_yes', 0],
            ['exit_yes', 0],
        ])->get();
        return view('ecape.Add', compact('students'));
    }

    public function show(Request $request, $id)
    {
        $student = Escape::join('students', 'escapes.student_id', '=', 'students.id')->where('student_id', $id)->first();
        return view('ecape.show', compact('student'));
    }

    public function destroy(request $request)
    {
        $id = $request->id;
        $student_id = $request->code;
        $student = Escape::join('students', 'escapes.student_id', '=', 'students.id')->where('code', $student_id);
        $student->update([
            'ecape_yes' => 0
        ]);
        $Escape = Escape::where('student_id', $id)->first();
        $Escape->delete();
        Session::flash('del', 'تم حذف الحالة ونقلها إلي سجل القيد العام');
        return back();
    }
    public function edit(request $request , $id)
    {
        $student = Escape::join('students', 'escapes.student_id', '=', 'students.id')->where('student_id', $id)->first();
        return view('ecape.edit', compact('student'));
    }
    public function update(Request $request)
    {
        $student_id = $request->student_id;
        $student = Escape::where('student_id', $student_id)->first();
        $student->update([
            'date_escape'   => $request->date_escape,
            'how_escape'    => $request->how_escape,
            'date_back'     => $request->date_back,
            'how_back'      => $request->how_back,
            'number_back'   => $request->number_back,
            'reason_back'   => $request->reason_back
        ]);
        return back()->with('update','تم تعديل البيانات بنجاح');
    }
    // Search data table
    public function Search(request $request)
    {
        $request->validate([
            'q' => 'required'
        ]);

        $q = $request->q;

        $Escape =  Escape::where('Name', 'like', '%' . $q . '%')->orwhere('code', 'like', '%' . $q . '%')->join('students', 'escapes.student_id', '=', 'students.id')->paginate(10);

        if($Escape->count()){

            return view('ecape.index', ['Escape' => $Escape]);

        } else {

            return redirect('ecape.index')->with('faild', 'فشل البحث ...');
        }

    }
}
