<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Myparent;
use App\Models\Classroom;
use App\Models\FeeStructure;
use App\Models\Invoice;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            // error_log("Here");
            $students = Student::with(['myparents:id,FatherName'])->get();

            $data = Auth::user();
            // return $students ;
            return view('Admin.Administrator.student')->with(['data' => $data, 'students' => $students]);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            var_dump($e->getMessage());
        }
    }

    public function register_student() {
        $data = Auth::user();
        $classes = Classroom::all();

        return view('Admin.Administrator.student-create')->with(['classes'=>$classes, 'data' => $data]);
        // return view('Admin.student-register')->with(['class'=>$classes]);
    }


    public function studentProfile(Request $request){
            $id = request()->route('id');   
            $data = Auth::user();
            $student = Student::firstWhere('id', $id);
            if(is_null($student)){
                return back()->with('fail', 'Expenses id cannot be found');
             }else{
                $classroom_id = $student->classroom_id;
                $IndexNumber = $student->IndexNumber;
                $fees = FeeStructure::Where('classroom_id', $classroom_id)->get();
                $invoices = Invoice::where('IndexNumber', $IndexNumber)->get();
                return view('Admin.student-profile')->with(['StudentInfo'=>$student, 'fees'=>$fees, 'invoices'=>$invoices, 'data' => $data]);
             }
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            error_log('Here1');
            $request->validate([
                'FirstName'=>'required',
                'LastName'=>'required',
                'StudentNumber'=>'required',
                'StudentEmail'=>'required',
                'DateOFBirth'=>'required',
                'StudentAddress'=>'required',
                'Gender'=>'required',
                'BloodGroup'=>'required',
                'City'=>'nullable',
                'State'=>'nullable',
                'Country'=>'nullable',
                'AdmissionDate'=>'nullable',
                'ExtraNote'=>'nullable',
                'class_id'=>'required',
                'StudentType'=>'nullable',
                'class_id'=>'required',
                'parent_code'=>'required',
               
            ]);
            // error_log('Here1');
            $parent = Myparent::firstWhere('ParentCode', $request->parent_code);
            if(is_null($parent)) return back()->with('fail', 'Parent Code does not exist');
            // error_log('Here3');
            $student = new Student([
                'FirstName' => $request->FirstName,
                'LastName' => $request->LastName,
                'StudentNumber' => $request->StudentNumber,
                'StudentEmail' => $request->StudentEmail,
                'DateOFBirth' => $request->DateOFBirth,
                'StudentAddress' => $request->StudentAddress,
                'Gender' => $request->Gender,
                'BloodGroup' => $request->BloodGroup,
                'City' => $request->City ?? 'default',
                'State' => $request->State ?? 'default',
                'Country' => $request->Country ?? 'default',
                'IdentityNumber' => "S-".mt_rand(1000000, 9999999).mt_rand(100, 999),
                'AdmissionDate' => $request->AdmissionDate ?? 'default',
                'ExtraNote' => $request->ExtraNote ?? 'default',
                'IndexNumber' => "00".mt_rand(1000000, 9999999).mt_rand(100, 999),
                'classroom_id' => $request->class_id,
                'myparent_id' => $parent->id,
                'StudentType' => $request->StudentType ?? 'default',
                'routeID' => ''
            ]);

            $student->save();
            error_log('Here2');
            return back()->with('success', 'Student created successfully');

        } catch (\Exception $e) {
            error_log($e->getMessage());
            return back()->with('fail', $e->getMessage());
        }
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
