<?php

namespace App\Http\Controllers;

use App\Models\Noticeboard;
use Illuminate\Http\Request;
use App\Models\Myfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Storage;

class NoticeboardController extends Controller
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
            $noticeboards = Noticeboard::all();

            $data = Auth::user();
            // return $noticeboard;
            return view('Admin.Academics.noticeboard')->with(['data' => $data, 'noticeboards' => $noticeboards]);
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
                'title' => 'required',
                'description' => 'required',
                'url' => 'nullable',
                'status' => 'required|',
                'attachment.*' => 'file|mimes:png,jpg,jpeg,pdf,docx|max:2048|required',
            ]);

            if(!$request->hasFile("attachment")) {
                return back()->with('fail', 'Files not found')->withInput();
            }
            // return $request->all();
            $user = Auth::user();
            $noticeboard = new Noticeboard([
                'title' => $request->title,
                'description' => $request->description,
                'url' => $request->url ?? '',
                'status' =>  $request->status
            ]);
            $noticeboard->save();
            // var_dump($class);

            $original_name = $request->attachment->getClientOriginalName();
            $name =  Str::random(3).'-'. $request->attachment->getClientOriginalName();
            $path = $request->attachment->storeAs('public/noticeboards', $name);

            $data = new Myfile([
                'name' => $original_name,
                'url' => $path,
            ]);

            $noticeboard->myfiles()->save($data);

            return back()->with('success', 'New Notice Created Succesffuly');
        } catch (\Exception $e) {
            error_log($e);
            return back()->with('fail', $e->getMessage())->withInput();
        }
    }

    public function showCreatePage() {
        $data = Auth::user();
        // return $classess;
        return view('Admin.Academics.noticeboard-create')->with(['data' => $data]);
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
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function show(Noticeboard $noticeboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticeboard $noticeboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticeboard $noticeboard)
    {
        try{
            // error_log('Creating new resource');
            // return $request->all();
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'url' => 'required',
                'status' => 'required|',
                'attachment' => 'file|mimes:png,jpg,jpeg,pdf,docx|max:2048|required',
            ]);

            if(!$request->hasFile("attachment")) {
                return back()->with('fail', 'Files not found')->withInput();
            }
            // return $request->all();

            $user = Auth::user();
            $noticeboard = Noticeboard::firstWhere('id',$id);
            $noticeboard->update([
                'title' => $request->title,
                'description' => $request->description,
                'url' => $request->url ?? '',
                'status' =>  $request->status,
            ]);
            // var_dump($class);
            $myfile = Myfile::firstWhere('myfileable_id',$id);
            if(Storage::exists($myfile->url)){
                Storage::delete($myfile->url);
            }

            $original_name = $request->attachment->getClientOriginalName();
            $name =  Str::random(3).'-'. $request->attachment->getClientOriginalName();
            $path = $request->attachment->storeAs('public/noticeboards', $name);

            $data = new Myfile([
                'name' => $original_name,
                'url' => $path,
            ]);

            $studymaterial->myfiles()->update($data);

            return back()->with('success', 'New Study Material Updated Succesffuly');
        } catch (\Exception $e) {
            error_log($e);
            return back()->with('fail', $e->getMessage())->withInput();
        }
    }

    public function showUpdatePage($id)
    {
        $data = Auth::user();
        $noticeboard = Noticeboard::with(['myfile:id,myfileable_id,url,name'])->firstWhere('id',$id);

        // return $studymaterial;
        return view('Admin.Academics.noticeboard-update')->with(['data' => $data, 'noticeboard' => $noticeboard]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticeboard $noticeboard)
    {
        //
    }
}
