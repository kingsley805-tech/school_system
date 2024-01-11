<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Classroom;
use App\Models\Homework;
use Illuminate\Support\Str;
use App\Models\Studymaterial;
use App\Models\Teacher;
use App\Models\Myfile;
use Storage;

class HomeworkController extends Controller
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
            $homework = Homework::all();

            $data = Auth::user();

            return view('Admin.Academics.homework')->with(['data' => $data, 'homeworks' => $homework]);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            var_dump($e->getMessage());
        }
    }

    public function showCreatePage() {
        $data = Auth::user();
        // return $classess;
        $classrooms = Classroom::all();
        return view('Admin.Academics.homework-create')->with(['data' => $data, 'classrooms' => $classrooms]);
    }


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
            $studymaterial = new Homework([
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
                $path = $file->storeAs('public/homework', $name);

                $data = new Myfile([
                    'name' => $original_name,
                    'url' => $path,
                ]);

                $studymaterial->myfiles()->save($data);
            }

            return back()->with('success', 'New Home Work Created Succesffuly');
        } catch (\Exception $e) {
            error_log($e);
            return back()->with('fail', $e->getMessage())->withInput();
        }
    }


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
            $studymaterial = Homework::firstWhere('id',$id);
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
                $path = $file->storeAs('public/homework', $name);

                $data = new Myfile([
                    'name' => $original_name,
                    'url' => $path,
                ]);

                $studymaterial->myfiles()->save($data);
            }

            return back()->with('success', 'New Home Work Updated Succesffuly');
        } catch (\Exception $e) {
            error_log($e);
            return back()->with('fail', $e->getMessage())->withInput();
        }
    }


    public function showUpdatePage()
    {
        $id = request()->route('id');
        $data = Auth::user();
        $studymaterial = Homework::with(['classrooms', 'subjects', 'myfiles:id,myfileable_id,url,name'])->firstWhere('id',$id);
        $classrooms = Classroom::all();
        // return $studymaterial;
        return view('Admin.Academics.homework-update')->with(['data' => $data, 'classrooms' => $classrooms, 'studymaterial' => $studymaterial]);
    }


    public function destroy($id)
    {
        $studymaterial = Homework::firstWhere('id',$id);
        $studymaterial->myfiles->delete();
        $studymaterial->delete();
        return redirect('/admin/academics/homework')->with('delete', 'successfully deleted');
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
