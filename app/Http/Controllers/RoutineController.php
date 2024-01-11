<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Routine;

class RoutineController extends Controller
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
            $classes = Classroom::all();

            $data = Auth::user();

            return view('Admin.Academics.routine')->with(['data' => $data, 'classes' => $classes]);
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
            // error_log('Creating new resource');
            // return $request->all();
            $request->validate([
                'classroom_id' => 'required|numeric',
                'subject_id' => 'required|numeric' ,
                'start_time' => 'required',
                'end_time' => 'required',
                'day' => 'required',
                'teacher_id' =>'required|numeric',
                'room_number' =>'required',
            ]);

            $user = Auth::user();
            $subject = new Routine($request->all());
            $subject->save();
            // var_dump($class);
            return back()->with('success', 'New Routine Created Succesffuly');
        } catch (\Exception $e) {
            error_log($e);
            return back()->with('fail', $e->getMessage())->withInput();
        }
    }

    public function showCreatePage() {
        $data = Auth::user();
        // return $classess;
        $classrooms = Classroom::all();
        $teachers = Teacher::all();
        return view('Admin.Academics.routine-create')->with(['data' => $data, 'classrooms' => $classrooms, 'teachers'=>$teachers]);
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
        try {
            // error_log("Here");
            // return "Here";
            $routines = Routine::with(['classrooms' => function($query){
                $query->selectRaw('id,name');
            }, 'teachers' => function($query){
                $query->selectRaw('id,name');
            },'subjects' => function($query){
                $query->selectRaw('id,Name');
            }])->where('classroom_id', $id)->get()->groupBy('day');

            $classroom = Classroom::firstWhere('id',$id);
            // return $routines['Monday'];

            $data = Auth::user();

            return view('Admin.Academics.routine-view')->with(['data' => $data, 'routines' => $routines, 'classroom' => $classroom]);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            var_dump($e->getMessage());
        }
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
