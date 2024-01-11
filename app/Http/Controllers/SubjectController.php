<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subject;
use App\Models\Classroom;
use App\Models\Teacher;

class SubjectController extends Controller
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
            $subject = Subject::with(['classrooms'])->get();

            $data = Auth::user();

            return view('Admin.Academics.subject')->with(['data' => $data, 'subjects' => $subject]);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            var_dump($e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try{
            error_log('Creating new resource');
            $request->validate([
                'name' => 'required|min:3',
                'subject_type' => 'required' ,
                'classroom' => 'required|numeric'
            ]);

            $user = Auth::user();
            $subject = new Subject([
                'name' => $request->name,
                'subject_code' => "S-".mt_rand(1000, 9999).mt_rand(100, 999),
                'subject_type' => $request->subject_type,
                'classroom_id' => $request->classroom
            ]);
            $subject->save();
            // var_dump($class);
            return back()->with('success', 'New Subject Created Succesfully');
        } catch (\Exception $e) {
            error_log($e);
            return back()->with('fail', $e->getMessage())->withInput();
        }
    }

    public function showCreatePage() {
        $data = Auth::user();
        // return $classess;
        $classrooms = Classroom::all();
        return view('Admin.Academics.subject-create')->with(['data' => $data, 'classrooms' => $classrooms]);
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
        try {
            // return $request->all();
            $request->validate([
                'name' => 'required|min:3',
                'subject_type' => 'required' ,
                'subject_code' => 'required|min:5' ,
                'classroom' => 'required|numeric',
                'class_teachers' => 'required|array'
            ]);

            $subject = Subject::firstWhere('id',$id);
            $subject->update([
                'name' => $request->name,
                'classroom_id' => $request->classroom,
                'subject_code' => $request->subject_code,
                'subject_type' => $request->subject_type
            ]);
            $subject->teachers()->sync($request->class_teachers);
            return back()->with('success', 'Successfully Updated');
        } catch (\Exception $e) {
            // $error_log($e);
            return back()->with('fail', $e->getMessage());
        }
    }

    public function showUpdatePage($id)
    {
        $data = Auth::user();
        $subject = Subject::with(['teachers'])->firstWhere('id',$id);
        $teachers = Teacher::all();
        $classrooms = Classroom::all();
        // return $subject;
        return view('Admin.Academics.subject-update')->with(['subject'=>$subject,'classrooms'=>$classrooms ,'teachers'=>$teachers, 'data'=>$data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sunject = Subject::firstWhere('id',$id)
                        ->delete($id);
        return redirect('/admin/academics/subject')->with('delete', 'successfully deleted');
    }
}
