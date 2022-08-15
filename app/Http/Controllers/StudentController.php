<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Escape;
use App\Models\StudentExits;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentCount = Student::all()->count();
        $ecapeCount = Escape::all()->count();
        $exitcount = StudentExits::all()->count();
        $total = $studentCount + $ecapeCount + $exitcount;
        return view('dashboard', compact('studentCount','ecapeCount', 'exitcount' , 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Get and Upload Image
        if($request->file('Image')){
            $file= $request->file('Image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
        }

        // Vaildation Data form
        $request->validate([
            'Name'   => 'required|string',
            'Birdth' => 'required',
            'code'   => 'required|unique:students',
            'Age'   => 'required',
            'Deposit' => 'required',
            'caseNum' => 'required',
        ]);

        // create model
        $student = new Student();

        // Insert Data after Vaildation
        $student->Name = $request->Name;
        $student->code = $request->code;
        $student->Birdth = $request->Birdth;
        $student->Age = $request->Age;
        $student->National_ID = $request->National_ID;
        $student->motherName = $request->motherName;
        $student->NameFather = $request->fatherName;
        $student->Address = $request->Address;
        $student->CaseNumber = $request->caseNum;
        $student->CaseHistory = $request->Deposit;
        $student->Accusation = $request->accusation;
        if(isset($filename)){
            $student->pic = $filename;
        }
        $student->Transfer = $request->Transfer;
        $student->state = $request->state;
        $student->stateResult = $request->stateResult;
        $student->social_watcher = $request->social_watcher;
        $student->stateEducation = $request->stateEducation;
        $student->worker = $request->worker;
        $student->Business = $request->Business;
        $student->stateFamily = $request->stateFamily;
        $student->Brothers = $request->Brothers;
        $student->fatherJop = $request->fatherJop;
        $student->motherJop = $request->motherJop;
        $student->Nots = $request->Nots;
        $student->save();
        return back()->with('Add', 'تم إضافة البيانات بنجاح');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function list(Student $student)
    {
        $students = Student::where([
            ['ecape_yes', 0],
            ['exit_yes', 0]
        ]
        )->paginate(10);
        return view('list', compact('students'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(request $request, $id)
    {
        $student = Student::findOrfail($id);
        return view('show', compact('student'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, $id)
    {
        $student = Student::findOrfail($id);
        return view('edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        // Get and Upload Image
        if($request->file('profile_image')){
            $file = $request->file('profile_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $student_img = Student::where('id' , $id)->pluck('pic')->first();

            if($student_img == ''){
                $update = Student::where('id' , $id)->update([
                    'pic' => $filename,
                ]);
            }
            else {

                $old_name = Student::where('id' , $id)->pluck('pic')->first();

                $imagepath = public_path('public/Image/' . $old_name);

                if(File::exists($imagepath)){
                    unlink($imagepath);
                }

                Student::where('id' , $id)->update([
                    'pic' => $filename,
                ]);

            }
        }

        $student = Student::find($id);
        $student->update([
            'code' => $request->code,
            'Name' => $request->Name,
            'National_ID' => $request->National_ID,
            'CaseHistory' => $request->CaseHistory,
            'CaseNumber' => $request->CaseNumber,
            'motherName' => $request->motherName,
            'NameFather' => $request->NameFather,
            'Address' => $request->Address,
            'stateEducation' => $request->stateEducation,
            'Accusation' => $request->Accusation,
            'Transfer' => $request->Transfer,
            'state' => $request->state,
            'stateResult' => $request->stateResult,
            'stateFamily' => $request->stateFamily,
            'Business' => $request->Business,
            'Brothers' => $request->Brothers,
            'fatherJop' => $request->fatherJop,
            'motherJop' => $request->motherJop,
            'social_watcher' => $request->social_watcher,
            'worker' => $request->worker,
            'Nots' =>$request->Nots
        ]);

        return back()->with('update','تم تعديل البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $student = Student::findOrfail($request->student_id);
        $student->delete();
        Session::flash('del', 'تم حذف الحالة بنجاح');
        return back();
    }

    // Search data table

    public function Search(request $request)
    {
        $request->validate([
            'q' => 'required'
        ]);

        $q = $request->q;

        $students = Student::where('Name', 'like', '%' . $q . '%')->orwhere('code', 'like', '%' . $q . '%')->paginate(10);

        if($students->count()){

            return view('list', ['students' => $students]);

        } else {

            return redirect('list')->with('faild', 'فشل البحث ...');
        }

    }
}
