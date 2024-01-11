<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Studymaterial;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Myfile;
use Storage;
class StudymaterialController extends Controller
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
            $studymaterial = Studymaterial::with(['classrooms', 'subjects'])->get();

            $data = Auth::user();
            // return $studymaterial;
            return view('Admin.Academics.studymaterials')->with(['data' => $data, 'studymaterials' => $studymaterial]);
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
                'title' => 'required',
                'description' => 'required',
                'url' => 'required',
                'downloadable' => 'required|',
                'files' => 'required|array',
                'files.*' => 'file|mimes:png,jpg,jpeg,pdf,docx|max:2048|required',
            ]);

            if(!$request->hasFile("files")) {
                return back()->with('fail', 'Files not found')->withInput();
            }
            // return $request->all();
            $user = Auth::user();
            $studymaterial = new Studymaterial([
                'classroom_id'=> $request->classroom_id,
                'subject_id' => $request->subject_id,
                'title' => $request->title,
                'description' => $request->description,
                'url' => $request->url ?? '',
                'downloadable' =>  ($request->downloadable == "on") ? 'true' : 'false',
            ]);
            $studymaterial->save();
            // var_dump($class);

            foreach ($request->file('files') as $file) {
                $original_name = $file->getClientOriginalName();
                $name =  Str::random(3).'-'. $file->getClientOriginalName();
                $path = $file->storeAs('public/studymaterials', $name);

                $data = new Myfile([
                    'name' => $original_name,
                    'url' => $path,
                ]);

                $studymaterial->myfiles()->save($data);
            }

            return back()->with('success', 'New Study Material Created Succesffuly');
        } catch (\Exception $e) {
            error_log($e);
            return back()->with('fail', $e->getMessage())->withInput();
        }
    }

    public function showCreatePage() {
        $data = Auth::user();
        // return $classess;
        $classrooms = Classroom::all();
        return view('Admin.Academics.studymaterials-create')->with(['data' => $data, 'classrooms' => $classrooms]);
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
     * @param  \App\Models\Studymaterial  $studymaterial
     * @return \Illuminate\Http\Response
     */
    public function show(Studymaterial $studymaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studymaterial  $studymaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(Studymaterial $studymaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Studymaterial  $studymaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            // error_log('Creating new resource');
            // return $request->all();
            $request->validate([
                'classroom_id' => 'required|numeric',
                'subject_id' => 'required|numeric' ,
                'title' => 'required',
                'description' => 'required',
                'url' => 'required',
                'downloadable' => 'required|',
                'files' => 'required|array',
                'files.*' => 'file|mimes:png,jpg,jpeg,pdf,docx|max:2048|required',
            ]);

            if(!$request->hasFile("files")) {
                return back()->with('fail', 'Files not found')->withInput();
            }
            // return $request->all();

            $user = Auth::user();
            $studymaterial = Studymaterial::firstWhere('id',$id);
            $studymaterial->update([
                'classroom_id'=> $request->classroom_id,
                'subject_id' => $request->subject_id,
                'title' => $request->title,
                'description' => $request->description,
                'url' => $request->url ?? '',
                'downloadable' =>  ($request->downloadable == "on") ? 'true' : 'false',
            ]);
            // var_dump($class);

            foreach ($request->file('files') as $file) {
                $original_name = $file->getClientOriginalName();
                $name = Str::random(3).'-'. $file->getClientOriginalName();
                $path = $file->storeAs('public/studymaterials', $name);

                $data = new Myfile([
                    'name' => $original_name,
                    'url' => $path,
                ]);

                $studymaterial->myfiles()->save($data);
            }

            return back()->with('success', 'New Study Material Updated Succesffuly');
        } catch (\Exception $e) {
            error_log($e);
            return back()->with('fail', $e->getMessage())->withInput();
        }
    }

    public function showUpdatePage($id)
    {
        $data = Auth::user();
        $studymaterial = Studymaterial::with(['classrooms', 'subjects', 'myfiles:id,myfileable_id,url,name'])->firstWhere('id',$id);
        $classrooms = Classroom::all();
        // return $studymaterial;
        return view('Admin.Academics.studymaterials-update')->with(['data' => $data, 'classrooms' => $classrooms, 'studymaterial' => $studymaterial]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studymaterial  $studymaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studymaterial = Studymaterial::firstWhere('id',$id);
        $studymaterial->myfiles->delete();
        $studymaterial->delete();
        return redirect('/admin/academics/studymaterials')->with('delete', 'successfully deleted');
    }

    public function destroyfile($id)
    {
        $myfile = Myfile::firstWhere('id',$id);
        $arr = explode('/', $myfile->url);
        $file_name = $arr[count($arr)-1];
        // return $file_name;
        if(Storage::exists($myfile->url)){
            Storage::delete($myfile->url);
            /*
                Delete Multiple files this way
                Storage::delete(['upload/test.png', 'upload/test2.png']);
            */
            $myfile->delete();
            return  back()->with('delete', 'file successfully deleted');
        }else{
            return  back()->with('delete', 'File does not exist.');
        }
    }
}
