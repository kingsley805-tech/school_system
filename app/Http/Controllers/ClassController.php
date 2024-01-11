<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|min:3',
                'section' => 'required',
            ]);

            $user = Auth::user();
            $class = new Classroom([
                'name' => $request->name,
                'section' => $request->section
            ]);
            $class->save();
            // var_dump($class);
            return back()->with('success', 'Successfull Created');
        } catch (\Exception $e) {
            // error_log($e);
            return back()->with('fail', $e->getMessage())->withInput();
        }
    }

    public function showCreatePage() {
        $data = Auth::user();
        // return $classess;
        return view('Admin.Academics.class-create')->with(['data' => $data]);
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
     * @return \Illuminate\Http\Response b
     */
    public function showall()
    {
        try {
            $classess = Classroom::with(['teachers','students'=>function($query) {
                $query->select('classroom_id', DB::raw(' count(classroom_id) as total_student'))
                    ->groupBy('classroom_id');
            }])
                ->get();
                            // $users = User::with(['posts' => function ($query) {
                            //     $query->select('id', 'user_id', 'title', 'created_at');
                            //   }])->get();
            $data = Auth::user();
            // return $classess;
            return view('Admin.Academics.class')->with(['data' => $data, 'classess' => $classess]);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            var_dump($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response b
     */
    public function show($id)
    {
        try {
            $classess = Classroom::where('id',$id)
                            ->orWhere('name',$id)->first();
            var_dump($classess);
        } catch (\Exception $e) {
            error_log($e);
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
        try {
            $request->validate([
                'name' => 'required|min:3',
                'section' => 'required',
                'class_teacher' => 'required'
            ]);

            $class = Classroom::firstWhere('id',$id)
                        ->update($request->all());
            return back()->with('success', 'Successfull Updated');
        } catch (\Exception $e) {
            // $error_log($e);
            return back()->with('fail', $e->getMessage());
        }
    }

    public function showUpdatePage($id)
    {
        $data = Auth::user();
        $class = Classroom::firstWhere('id',$id);
        $teachers = Teacher::all();
        return view('Admin.Academics.class-update')->with(['classes'=>$class, 'teachers'=>$teachers, 'data'=>$data]);
    }

    public function classSubjects($id) {

        try{
            $subjects = Classroom::with(['subjects'=>function($query){
                $query->selectRaw('id, classroom_id, name');
            }])->selectRaw('id')->firstWhere('id', $id);
            return response()->json(["subjects" => $subjects->subjects]);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 400);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = Classroom::firstWhere('id',$id)
                        ->delete($id);
        return redirect('/admin/academics/class-section')->with('delete', 'successfully deleted');
    }
}
